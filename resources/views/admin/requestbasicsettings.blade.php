@extends('layouts.admin')

@section('content')

<h2>welcome admin, how are you today.<br>here you can set up for a new test</h2>
<form action="{{route('savebasicsettings')}}" method="post">
	{{csrf_field()}}
				<div class="form-group form-group-default required col-md-8">
                        <label>Live course</label>
                        <span>this is the course that would be done now</span>
                        <select class="form-control" required="" name="live_course">
                        	@foreach($courses as $course)
                        	<option class="form-control" value="{{$course}}">{{$course}}</option>
                        	@endforeach

                        </select>
                      </div>
                <div class="form-group form-group-default required col-md-8">
                        <label>Mode</label>
                        <span>this is the mode you want it to be done</span>
                        <select class="form-control" required="" name="mode">
                        	<option class="form-control" value="exam">exam</option>
                        	<option class="form-control" value="test">test</option>

                        </select>
                      </div>
                <div class="col-md-8">
                	<input type="submit" value="Publish" class="btn btn-primary">
                </div>

@endsection