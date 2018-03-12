<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exams_setting;
use App\Talk;
use App\Exam;
use DB;
use App\exams_detail;
use App\User;
use App\course_done;
use Auth;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('AdminCheck');
                }

    public function index(){
        
// use middleware to check if current user is admin
       // dd(Auth::user());
        return view('admin.adminIndex');

    }

    public function RequestCreateCourseData(){
    	return view('admin.showcoursecreateform');
    }
    public function CreateNewCourse(Request $request){
    	if(!$this->checkCourseAlreadyExist($request->all()['course_name'])){
    	
$fix=new Exams_setting;
$fix->course=$request->all()['course_name'];
$fix->case=$this->FormCaseData($request);
$fix->no_of_questions=0;
//session(['course_created'=>1]);
$fix->save();
return back();
    	}
    	else{
    		return 'course exist already';
    	}

    }
    public function FormCaseData($request){
    	$catCase=array('time'=>$request->all()['time_cat'],'ques'=>$request->all()['ques_cat']);
    	$examCase=array('time'=>$request->all()['time_exam'],'ques'=>$request->all()['ques_exam']);
    	$prepare=array('test'=>$catCase,'exam'=>$examCase);
    	return json_encode($prepare);
    }
    public function checkCourseAlreadyExist($course_name){
    	$finder=Exams_setting::where('course',$course_name)->first();
    	if(count($finder)<1){
    		return false;
    	}
    	else{
    		return true;
    	}
    }
    public function ShowAllCourses(){
    	$get=Exams_setting::paginate(3);
    	//$case=json_decode($get->case,1);
    	$success=(session('courseDeleted'))?session('courseDeleted'):0;
    	session(['courseDeleted'=>null]);
    	return view('admin.seeAllCourses',compact('get','success'));
    	
    }
    public function requestAddQuestions($course_id){
        $course_id=Exams_setting::find($course_id)->course;
    $is_added=(session('__anisMessanger.is_added')!==null)?session('__anisMessanger.is_added'):0;
    session(['__anisMessanger.is_added'=>null]);
    	return view('admin.addquestions',compact('is_added','course_id'));
    }
    public function saveAddedQuestion(Request $request,$course_id){
//dd($request->all());
        $get=Exams_setting::where('course',$course_id);
     //dd($get['course']);
$fix=new Exam;

$fix->questions=$request->all()['question'];
$fix->course=$get->first()['course'];
$fix->a=$request->all()['a'];
$fix->b=$request->all()['b'];
$fix->c=$request->all()['c'];
$fix->d=$request->all()['d'];
$fix->ans=$request->all()['options'];
$fix->save();
$get->increment('no_of_questions');
session(['__anisMessanger.is_added'=>1]);
return  back();
    }
    public function seeAllCourseQuestions($course_id){

    	$get=Exam::where('course',$course_id)->paginate(5);
    	
    	return view('admin.seeCourseQuestions',compact('get'));
    }
    public function showEditQuestion($ques_id,$success=0){

    	$get=Exam::find($ques_id);
    	$success=(isset($success))?$success:0;
    	return view('admin.editQuestion',compact('get','success'));
    }
    public function deleteCourse($course_id){
    	$get=Exams_setting::find($course_id);
    	$fix=Exam::where('course',$get->course)->delete();
    	$get->delete();
    	session(['courseDeleted'=>1]);
    	return redirect()->route('showallcourses');
    }
    public function SaveEditedQuestion(Request $request,$ques_id){

    	$get=$request->all();
    	//dd($get['question']);
    	$fix=DB::table('Exams')->where('id',$ques_id)->update(['questions'=>$get['question'],
    		'a'=>$get['a'],
    		'b'=>$get['b'],
    		'c'=>$get['c'],
    		'd'=>$get['d'],
    		'ans'=>$get['options']
    		]);

    	return redirect()->route('showeditquestion',['ques_id'=>$ques_id,'sucess'=>1]);
    	
    }
    public function showEditCurrentCourseSettings($course_id){
    	$get=Exams_setting::find($course_id);
    	$mode=$get->case;
    	$success=(session('update_done')!==null)?session('update_done'):0;
    	session(['update_done'=>null]);
    	return view('admin.showEditCourseSettings',compact('get','mode','success'));

    }
    public function SaveEditedCourseSettings(Request $request,$course_id){
    	$data=$request->all();
    	$fix=Exams_setting::find($course_id)->update([
    		'course'=>$data['course_name'],
    		'case'=>$this->FormCaseData($request)
    		]);
    	session(['update_done'=>1]);
    	return back();
    }
    public function requestBasicSettings(){
    	$courses=json_decode(Exams_setting::pluck('course'),1);
    	
    	return view('admin.requestbasicsettings',compact('courses'));
    }

    public function setBasicSettings(Request $request){
    	$get=$request->all();
    	$fix=DB::table('admintables')->update(['live_course'=>$get['live_course'],'mode'=>$get['mode']]);
    	return redirect()->route('monitorpage');
    }
    public function MonitorExam(){
       //$course=json_decode(DB::table('admintables')->pluck('live_course'),1)[0]
    	return view('admin.monitorexam');
    }
    public function setExamStart(Request $request){
    	//return $request->all()['start'];
       // return json_encode(array());
       //$get['start']='false';
    	$get=$request->all();
    	//var_dump($request->all()['start']);
    	if($get['start']=='true'){
    		$fix=DB::table('admintables')->update(['exam_start'=>1]);
    		return 'done';
    	}
    	else{

             $fix_=new course_done;
             //return json_decode(DB::table('admintables')->pluck('live_course'),1)[0];
             $fix_->course_done=json_decode(DB::table('admintables')->pluck('live_course'),1)[0];
             $fix_->save();
        
    		$fix=DB::table('admintables')->update(['exam_start'=>0,'live_course'=>null]);
           return 'stoped';
    	
    	}
    	
    }

    public function seeStudentsRecords(){
    	$getter=json_decode(DB::table('admintables')->pluck('live_course'),1)[0];
    	$counter=count(User::where('logged_in','true')->get());
    	$get=exams_detail::where('course',$getter)->get();
    	foreach ($get as $key => $value) {
    		$details[]=$value;
    		$users[]=User::find($value['users_id']);
    	}

    	return view('admin.partialView',compact('details','users','counter'));
    }
    public function showDoneCourses (){
        $course_done=DB::table('course_done')->paginate();

    
        return view('admin.donecourses',compact('course_done'));
    }
    public function viewDoneResult($course){
        $course=$course;
        $get=exams_detail::where('course',$course)->leftJoin('users','exams_details.users_id','=','users.id')->paginate(6);
       $get__=exams_detail::where('course',$course)->get();
        return view('admin.results',compact('get','get__'));
    }
    public function registerStudents(){

    }
    public function bb (){

    }

    }

