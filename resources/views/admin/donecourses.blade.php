@extends('layouts.admin')
@section('content')

@foreach($course_done as $course)

<div class="col-md-4">
	
                    <div class="panel panel-default">
                      <div class="panel-heading separator">
                        <div class="panel-title">{{$course->course_done}} <span class="badge badge-info" title="no of questions">done</span>
                        
                        </div>
                      </div>
                      <div class="panel-body">
                       
									
                        <p>

                        	DONE ON :: {{$course->created_at}}
                        	<br>
                        	<a href="{{route('viewdoneresults',['course'=>$course->course_done])}}">View Results</a>

                        </p>


                        </div>
                      </div>

                    </div>
                    
                    
                  


@endforeach

@endsection