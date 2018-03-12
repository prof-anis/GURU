<?php

namespace App\Http\Controllers;
//use Illuminate\Http\Facade;
use Illuminate\Http\Request;
use App\Talk;
use Auth;
use DB;
use App\Events\UserPostedPost;
use App\Events\UserLikePost;
use App\User;
use App\board_detail;

class DiscussionBoardController extends Controller
{

   
   public function index($board_code=null){
 


      $getPosts=Talk::where('board_code',session('board_code'))->leftJoin('users','users.id','=','talks.sender')->simplePaginate(7);

      $getBoardDetails=board_detail::where('board_code',session('board_code'))
      ->leftJoin('users','board_details.Admin','=','users.id')->first();


 session(['token'=>csrf_field()]);

   	return view('discussion.discussionboard',compact('getPosts','getBoardDetails'));
    }

    public function reply(Request $request){
      
      session(['post_to_reply'=>$request->all()['rel_message']]);

      $ff=DB::table('talks')->where('message_id',$request->all()['rel_message'])->first();
        //Auth::user()->notify(new SomeoneHasLiked());
      return json_encode($ff);
    }



   public function DisplayRoom(){

   }

   public function useAdvancedTextEditor(){
      return view('discussion.advancedEditor');
   }

   public function Create(Request $request){

   	$post=new Talk;
      $post->likes=0;
      $post->board_code=session('board_code');
      $post->sender=Auth::user()->id;
      $post->message=$request->all()['message'];
      $post->referenced_message=(null!==session('post_to_reply')) ? session('post_to_reply') : 'none';
      //dd($post->referenced_message);
      $post->featured_image=isset($request->all()['featured_image']) ? $request->all(['featured_image']) : 'none';
      $post->featured_video=isset($request->all()['referenced_video']) ? $request->all(['referenced_video']) : 'none';
      $post->featured_docs=isset($request->all()['referenced_doc']) ? $request->all(['referenced_doc']) : 'none';
      
      $post->save();
      
      event(new UserPostedPost($post->sender));
      redirect(url('boards'));
          
      
   }
   public function Like(Request $request){
     
 if(DB::table('talks')->where('message_id',$request->all()['postId'])->increment('likes')){
          $ff=DB::table('talks')->where('message_id',$request->all()['postId'])->first()->likes;
         $whoLikedit=User::find(Auth::user()->id);
         $postLiked=Talk::where('message_id',$request->all()['postId'])->first();
        // $whoPostedIt=User::find()
         $data=array($whoLikedit,$postLiked);
        //dd($data);
         event(new UserLikePost($data));
          


           return $ff;
 }
 else{
  return false;
 }
                              
   }
   public function UnlikePost(){

   }

}
