@extends('layouts.admin')
@section('content')
<form action='{{route("createnewcourse")}}' method="post">
	{{csrf_field()}}
			<div class="form-group col-md-8">
                        <label>Course Name</label>
                        <br>
                        <span class="help">the name you want to be seen from the exam panel</span>
                        <input class="form-control" required="" type="text" name="course_name">
                      </div>
<br>
 <span class="help">by default ,  your exam can be done in two modes, the CAT and Exam modes. Configure Each</span>
           <div class="form-group col-md-8">
                        <label>Exam Mode</label>
                        <br>
                        <span>Number of Questions</span><input class="form-control" required="" type="number" name="ques_exam">
                       <span>Time</span><input class="form-control" required="" type="number" name="time_exam">
                      
                      </div>

                         <div class="form-group col-md-8">
                        <label>CAT Mode</label>
                        <br>
                        <span>Number of Questions</span><input class="form-control" required="" type="number" name="ques_cat">
                       <span>Time</span><input class="form-control" required="" type="number" name="time_cat">
                      
                      </div> 
                      <div class="col-md-12">
                      <input type="submit" value="Create" class="btn btn-primary">  
                  </div>         
@endsection