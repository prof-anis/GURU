@extends('layouts.admin')
@section('content')

<div> @if($success==1) you have  successfully deleted the course @endif</div>
@foreach($get as $course)
<div class="col-md-4">
	
                    <div class="panel panel-default">
                      <div class="panel-heading separator">
                        <div class="panel-title">{{$course->course}} <span class="badge badge-info" title="no of questions">{{$course->no_of_questions}}</span>
                        
                        </div>
                      </div>
                      <div class="panel-body">
                       
									
                        <p>
                        	@foreach($course->case as $key=>$value)

                        	@if($key=='exam')
                        	<h5>EXAM DETAILS</h5><br>
                        	{{$value['time']}}<br>
                        	{{$value['ques']}}<br>
                        	@endif
                        	@if($key=='test')
                        	<h5>Test DETAILS</h5><br>
                        	{{$value['time']}}<br>
                        	{{$value['ques']}}<br>
                        	@endif
                        	@endforeach

                        	<div class="btn-group">
                        <form method="post" action="{{route('requestaddquestions',['course_id'=>$course->id])}}">
                        	{{csrf_field()}}
                          <input type='submit' value="Add Questions" class='btn btn-primary '>
                   </form>
                    <form action="{{route('deletecourse',['course_id'=>$course->id])}}" method="post">
                    {{csrf_field()}}
                    <input type='submit' value="Delete" class='btn btn-danger '>
                   </form>
                    <form action="{{route('seecoursequestions',['course_id'=>$course->course])}}" method="post">
                    {{csrf_field()}}
                    <input type='submit' value="View All Questions" class='btn btn-success '>
                    </form>
                    <form action="{{route('editcoursesettings',['course_id'=>$course->id])}}" method="post">
                    {{csrf_field()}}
                    <input type='submit' value="Edit" class='btn btn-success '>
                    </form>
                    </p>
                </div>
                      </div>

                    </div>
                    
                    
                  </div>

@endforeach
<div class='col-md-12'>
{{$get->links()}}
</div>
@endsection