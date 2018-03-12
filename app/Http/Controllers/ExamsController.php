<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\exams_setting;
use App\Exam;
use DB;
use Auth;
use App\Exams_detail;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\HelpEncrypt;


class ExamsController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('checkExamIsDone');

    }
    public function index()
    {	

     if(json_decode(DB::table('admintables')->pluck('exam_start'),1)[0]==1){
        //$available_courses=DB::table('exams_settings')->pluck('course');
        $available_courses=DB::table('admintables')->pluck('live_course');
       $mode=DB::table('admintables')->pluck('mode');
$mode=json_decode($mode,1)[0];

        return view('exams.index',compact('available_courses','mode'));
     }
    	return view('exams.sorry');
    }


    



   



    public function exam_intro(Request $request,$course){
       
        $course=HelpEncrypt::hasher($course,'d');
        session(['course'=>$course]);
        session(['mode'=>$mode=DB::table('admintables')->pluck('mode')]);
        $mode=json_decode(DB::table('admintables')->pluck('mode'),1)[0];
    
        $details=exams_setting::where('course',$course)->first()->case[$mode];
      $course=json_decode(DB::table('admintables')->pluck('live_course'),1)[0];
      
      


    
  

  

   return view('exams.introduce_exam',compact('course','details','exam'));
    }


    public function getQuestions($course){
        //$time=(session('questions'))? $session('questions'):
        return DB::table('exams')->where('course',$course)->inRandomOrder()->limit(session('questions'))->get();
    }

    public function retrieve_id($questions){
//var_dump($questions);
        $ids=array();
        foreach ($questions as $key => $value) {
            $ids[]=$value->id;
        }
       // var_dump($questions);
       
        return $ids;
    }

public function obtain_test_time($course){
return session('time');

}
    public function start(){

        $course=session('course');
        $time=$this->obtain_test_time($course);

        $questions=$this->getQuestions($course);
        $ids=$this->retrieve_id($questions);

       session(['ids'=>$ids]);

    	return view('exams.start',compact('questions','time'));
    }



public function split_id($id_answered){
foreach ($id_answered as $key => $value) {
    $split=explode('_', $key)[0];
    $formatted[$split]=$value;
}
return $formatted;
}



public function compile($questions){
$compiled=array();
     foreach (session('ids') as $key => $value) {

            if(array_key_exists('ques_'.$value, $questions)){
               // $i++;
              

                $compiled[$value]=$questions['ques_'.$value];
            }
            else{
                $compiled[$value]='null';
            }
        }
       

        return $compiled ;
       
}
public function getAns($compile){
    //var_dump($compile);
    $ans=array();
    foreach ($compile as $key => $value) {
        //getting the original answers
     $ans[$key]=Exam::where('id',$key)->first()->ans;
    }

    return $ans;
   
}
public function compareAns($compiled,$choosen){
    
    $score=0;
foreach ($choosen as $key => $value) {
    if($value==$compiled[$key]){
        $score++;
    }
}

return $score;

}
public function findPercentageScore($score,$total){
    if($total==0){
        return 0 ;
    }
    return ($score/$total)*100;
}
   public function saveAns($compiled_ans,$score){

   /* DB::table('exams_details')->insert([
        'users_id'=>Auth::user()->id,
        'ques_ans'=>json_encode($compiled_ans),
        'score'=>$score]);*/
$details=new Exams_detail;
$details->users_id=Auth::user()->id;
$details->ques_ans=json_encode($compiled_ans);
$details->score=$score;
$details->course=session('course');
$details->mode=session('mode');
$details->save();
   }
    public function process(Request $request){
   
       $compile=$this->compile($request->all());
       $db_ans=$this->getAns($compile);
        $score=$this->compareAns($db_ans,$compile);
        $percentageScore=$this->findPercentageScore($score,count($compile));
        $this->saveAns($compile,$percentageScore);
       var_dump($percentageScore);
       session(['course'=>null]);
       session(['mode'=>null]);

       return view('exams.afterExams',compact('percentageScore'));



    }

    
}
