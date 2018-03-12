@extends('layouts.admin')

@section('content')

<form action="{{route('saveaddedquestion',['course_id'=>$course_id])}}" method="post">
	{{csrf_field()}}
<div>
@if($is_added==1)

you have successfully added a new question

@endif
</div>
	
<div class="form-group form-group-default required col-md-8">
                        <label>Question</label>
                        <input name="question" class="form-control" required="" type="text" value="">
                      </div>
<div class="form-group form-group-default required col-md-8">
                        <label>Option A</label>
                        <input name="a"class="form-control" required="" type="text" value="">
                      </div>
<div class="form-group form-group-default required col-md-8">
                        <label>Option B</label>
                        <input name="b" class="form-control" required="" type="text" value="">
                      </div>
<div class="form-group form-group-default required col-md-8">
                        <label>Option C</label>
                        <input name="c" class="form-control" required="" type="text" value="">
                      </div>
<div class="form-group form-group-default required col-md-8">
                        <label>Option D</label>
                        <input name="d" class="form-control" required="" type="text" value="">
                    </div>
                    <div class='col-md-12'>
<div class="radio">
                      <input   value="a" id="checkbox9" type="radio" name="options">
                      <label for="checkbox9">A</label>
                    </div>
<div class="radio">
                      <input   value="b" id="checkbox8" type="radio" name="options">
                      <label for="checkbox8">B</label>
                    </div> 
  <div class="radio">
                      <input    value="c" id="checkbox7" type="radio" name="options">
                      <label for="checkbox7">C</label>
                    </div>
 <div class="radio">
                      <input    value="d" id="checkbox6" type="radio" name="options">
                      <label for="checkbox6">D</label>
                    </div>


                </div>
<div class='col-md-12'>
<input type='submit' class="btn btn-complete" value="Save">
<a href="{{route('seecoursequestions',['course_id'=>$course_id])}}"  class='btn btn-complete'>Go back To Questions</a>
</div>
            </form>



@endsection