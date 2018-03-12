@extends('layouts.admin')

@section('content')
@if($success==1)
you have successfully edited your course , here is what you have now

@endif
<form action="{{route('saveeditedcoursesettings',['course_id'=>$get->id])}}" method="post">
	{{csrf_field()}}
			<div class="form-group col-md-8">
                        <label>Course Name</label>
                        <br>
                        <span class="help">the name you want to be seen from the exam panel</span>
                        <input class="form-control" required="" type="text" name="course_name" value="{{$get->course}}">
                      </div>
<br>
 <span class="help">by default ,  your exam can be done in two modes, the CAT and Exam modes. Configure Each</span>
           <div class="form-group col-md-8">
                        <label>Exam Mode</label>
                        <br>
                        <span>Number of Questions</span><input value="{{$mode['exam']['ques']}}" min="1" max="200" class="form-control" required="" type="number" name="ques_exam">
                       <span>Time</span><input class="form-control" value="{{$mode['exam']['time']}}" required="" min="1" max="200" type="number" name="time_exam">
                      
                      </div>

                         <div class="form-group col-md-8">
                        <label>CAT Mode</label>
                        <br>
                        <span>Number of Questions</span><input value="{{$mode['test']['ques']}}" min="1" max="200" class="form-control" required="" type="number" name="ques_cat">
                       <span>Time</span><input class="form-control" min="1" value="{{$mode['test']['ques']}}" max="200" required="" type="number" name="time_cat">
                      
                      </div> 
                      <div class="col-md-12">
                      <input type="submit" value="Save" class="btn btn-primary">  
                  </div>         
@endsection