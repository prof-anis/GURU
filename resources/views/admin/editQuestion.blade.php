@extends('layouts.admin')

@section('content')

<form action="{{route('saveeditedquestion',['ques_id'=>$get->id])}}" method="post">
	{{csrf_field()}}
<div></div>
	@if($success==1)
you have suceessfully edited the question. here is what you have now
@endif
<div class="form-group form-group-default required col-md-8">
                        <label>Question</label>
                        <input name="question" class="form-control" required="" type="text" value="{{$get->questions}}">
                      </div>
<div class="form-group form-group-default required col-md-8">
                        <label>Option A</label>
                        <input name="a"class="form-control" required="" type="text" value="{{$get->a}}">
                      </div>
<div class="form-group form-group-default required col-md-8">
                        <label>Option B</label>
                        <input name="b" class="form-control" required="" type="text" value="{{$get->b}}">
                      </div>
<div class="form-group form-group-default required col-md-8">
                        <label>Option C</label>
                        <input name="c" class="form-control" required="" type="text" value="{{$get->c}}">
                      </div>
<div class="form-group form-group-default required col-md-8">
                        <label>Option D</label>
                        <input name="d" class="form-control" required="" type="text" value="{{$get->d}}">
                    </div>
                    <div class='col-md-12'>
<div class="radio">
                      <input  @if($get->ans=='a') checked @endif value="1" id="checkbox9" type="radio" name="options">
                      <label for="checkbox9">A</label>
                    </div>
<div class="radio">
                      <input   @if($get->ans=='b') checked @endif value="1" id="checkbox8" type="radio" name="options">
                      <label for="checkbox8">B</label>
                    </div> 
  <div class="radio">
                      <input   @if($get->ans=='c') checked @endif value="1" id="checkbox7" type="radio" name="options">
                      <label for="checkbox7">C</label>
                    </div>
 <div class="radio">
                      <input  @if($get->ans=='d') checked @endif  value="1" id="checkbox6" type="radio" name="options">
                      <label for="checkbox6">D</label>
                    </div>


                </div>
<div class='col-md-12'>
<input type='submit' class="btn btn-complete" value="Save">
<a href="{{route('seecoursequestions',['course_id'=>$get->course])}}" class='btn btn-complete'>Go back To Questions</a>
</div>
            </form>



@endsection