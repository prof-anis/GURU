<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostExamsController extends Controller
		{
		    public function viewExamsDetails($id,$created_at=null){
		

		$details=DB::table('exams_details')->where('id',$id)->first();

		$ansProvided=json_decode($details->ques_ans,1);
		
		foreach ($ansProvided as $key => $value) {
			$questions[]=DB::table('exams')->where('id',$key)->first();
			$ans_supplied[]=$value;
		}
		



		return view('exams.viewDetails',compact('questions'));

		    }
}
