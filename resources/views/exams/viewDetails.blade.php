@extends('layouts.anis')
@section('title')
GURU|Details

@endsection
<form action='/exam/process' method='post'>

{{csrf_field()}}

@section('content')
<br><br><br><br><br>
<?php
$i=1;

?>

@foreach($questions as $value)

<div class='ques' ques='ques' id='{{$i}}'>
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                   <div class="panel-heading"> {{$value->questions}}</div>

                    <div class="panel-body">
                      

                       	<input disabled type='radio' @if($value->ans=='a') checked @endif>{{$value->a}}
                       	<br>
                       		<input type='radio' disabled  @if($value->ans=='b') checked @endif>{{$value->b}}
                       		<br>
                       			<input   type='radio' disabled  @if($value->ans=='c') checked @endif>{{$value->c}}
                       			<br>
                       				<input  type='radio' disabled  @if($value->ans=='d') checked @endif>{{$value->d}}
                       				<br>



                      
                    </div>
                </div>
            </div>
        </div>
    </div>

  </div>
  <?php
$i=$i+1;

?>
  @endforeach
  <button class="btn btn-rounded btn-primary m-b-10 col-md-2 col-md-offset-2 " id="prev">prev</button>
   
    <button class="btn btn-rounded btn-primary m-b-10 col-md-2 col-md-offset-4 " id="next">Next</button>
  
  @endsection

<script src={{asset("/assets/plugins/jquery/jquery-1.11.1.min.js")}} type="text/javascript"></script>
    <script type="text/javascript">

$(document).ready(function(){
var pp=$('.ques');
//alert(pp.length);
$('.ques').hide();
$('.ques:first').show();







$('#next').click(function(){

  var currId=$('.ques:visible').attr('id');
  if(currId<$('.ques').length){
     var nextId=parseInt(currId)+1;

 $('.ques:visible').hide();

 nextId='#'+nextId;

 $(nextId).show();
  }

  else{
     $('.ques:visible').hide();
    $('.ques:first').show();
  }
  return false;
 
});


$('#prev').click(function(){

  var currId=$('.ques:visible').attr('id');
  if(currId>1){
     var nextId=parseInt(currId)-1;

 $('.ques:visible').hide();

 nextId='#'+nextId;

 $(nextId).show();
  }

  else{
        $('.ques:visible').hide();
    $('.ques:last').show();
  }
  return false;
 
});

});

</script>