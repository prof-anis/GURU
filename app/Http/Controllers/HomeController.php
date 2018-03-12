<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { //  $past_record=['']
    //dd(HelpEncrypt::hasher('jjj','e'));
    $past_records=DB::table('exams_details')->where('users_id',Auth::user()->id)->paginate(5);
       $notifications=Auth::user()->notifications;
       //dd($notifications[1]->data);
        return view('home',compact('past_records','notifications'));
    }
}
