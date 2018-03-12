<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\board_detail;
use Auth;
use DB;
use App\User;


class AssistDiscussionBoardController extends Controller
{
    public function index(){
    	return view('discussion.createNewGroup');
    }

    public function createGroup(Request $request){
    	
    	$boardDetails=new board_detail;
    	$boardDetails->BoardName=$request->all()['name'];
    	$boardDetails->BoardDescription=$request->all()['description'];
    	$boardDetails->BoardCategory=$request->all()['category'];
    	$boardDetails->is_silence=0;
    	$boardDetails->is_closed=isset($request->all()['is_closed'])?$request->all()['is_closed']:0;
    	$boardDetails->discussion_made_public=isset($request->all()['discussion_made_public'])?$request->all()['discussion_made_public']:0;
    	$boardDetails->no_of_members=1;
    	$boardDetails->members_id=json_encode(array(Auth::user()->id));
    	$boardDetails->Admin=Auth::user()->id;
        $boardDetails->board_code=sha1($request->all()['name'].$request->all()['category'].rand(2,10));
    	if($boardDetails->save()){
          redirect(url('board/{$boardDetails->board_code}'));

    }
}


        public function showAllBoards(){

            $boards=board_detail::get();


            return view('discussion.showAllBoards',compact('boards'));
        }

        public function JoinBoard($board_code){
           /* $join=new User;
            $group=board_detail::where('board_code',$board_code)->first();
            $details=
                array(
                    'group_id'=>$group->board_code,
                    'is_admin'=>false,
                    'is_silence'=>false
                );
            //$join->group=json_encode($details);
            DB::table('Users')->where('id',Auth::user()->id)->update(['group'=>json_encode($details)]);
            $increase=board_detail::where('board_code',$board_code)->increment('no_of_members');
            */

           // $this->addToMembers($board_code);
            $this->addGroupDetailsToUserDetails();

           



        }

        public function addGroupDetailsToUserDetails(){
                dd($this->getPrevGroupDetails());
        }

        public function getPrevGroupDetails(){
            return User::find(Auth::user()->id)['groups'];
        }

        public function getPrevMembers($board_code){
            $members_id=json_decode(DB::table('board_details')->where('board_code',$board_code)->first()->members_id,1);
          return $members_id;
        }

        public function checkHisInGroup($members_id){

             if(in_array(Auth::user()->id, $members_id)){
            //then he his in the group already
                return true;
           }
           else{
            return false;
            //$members_id=json_encode(array_merge($members_id,array(Auth::user()->id)));
            
           }
        }

        public function mergeNow($members_id){
        $members_id=json_encode(array_merge($members_id,array(Auth::user()->id)));
        return $members_id;
            
        }

        public function addToMembers($board_code){
          
            $prevMembers=$this->getPrevMembers($board_code);
            if($this->checkHisInGroup($prevMembers)){
               $members_id= $this->mergeNow($prevMembers);
        $addToMembers=DB::table('board_details')->where('board_code',$board_code)->update(['members_id'=>$members_id]);
            
            }
            
        }


    	
    }

