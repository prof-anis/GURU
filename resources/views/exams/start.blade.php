@extends('layouts.anis')
@section('title')
GURU|exam
@endsection
@section('content')
<br>
<br>
<br>
<br>
<br>
<?php
$i=1;

?>

         
<div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
              <h1> <span id='min'>{{$time-1}}</span>:<span id='sec'>59</span></h1>
                    
                    </div>
                  </div>
                </div>
              </div>

              <div class="progress col-md-6">
                          <div id='progressTracker' class="progress-bar progress-bar-danger" style="width:30%"></div>
                         </div>
                        <h1> <span id='progressTrackerBar'>0%</span><span> done!!!</span></h1>





<form action='/exam/process' method='post'>

{{csrf_field()}}


@foreach($questions as $value)

<div class='ques' ques='ques' id='{{$i}}'>
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                   <div class="panel-heading"> {{$i}}{{$value->questions}}</div>

                    <div class="panel-body">
                      

                       	<input nav_connect = {{$i}} class='radio_button' value ='a' type='radio' name='ques_{{$value->id}}'>{{$value->a}}
                       	<br>
                       		<input nav_connect = {{$i}}  class='radio_button' value ='b' type='radio' name='ques_{{$value->id}}'>{{$value->b}}
                       		<br>
                       			<input nav_connect = {{$i}} class='radio_button' value ='c' type='radio' name='ques_{{$value->id}}'>{{$value->c}}
                       			<br>
                       				<input nav_connect = {{$i}} class='radio_button' value ='d'  type='radio' name='ques_{{$value->id}}'>{{$value->d}}
                       				<br>



                      
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

 <?php
$i++;
 ?>
    @endforeach
     <button class="btn btn-rounded btn-primary m-b-10 col-md-2 col-md-offset-2 " id="prev">prev</button>
   
    <button class="btn btn-rounded btn-primary m-b-10 col-md-2 col-md-offset-4 " id="next">Next</button>
  

          <div class="col-md-12">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">
                        <div class="panel-title"> <span class="semi-bold">Assesment</span> Navigator</h3>
                        </div>
                      </div>
                      <div class="panel-body">
                        <h3>
                 
                  <span class="semi-bold">Assesment</span> Navigator</h3>
                        <?php
                          $i=1;

                          ?>   
                 @foreach($questions as $value)
                  
                 <button class="btn btn-default btn-sm  btn-rounded m-r-20 col-md-0.5  buttons" q_connect='{{$i}}' id='bb{{$i}}'>{{$i}}</button>

                        <?php
                        $i++;
                         ?>
                 @endforeach

                     </div>
                    </div>
                  </div>

     <input type='submit' class="btn btn-rounded btn-primary m-b-10 col-md-2 col-md-offset-9" value="Submit">
  </form>

<br>
<br>
<br>
<br>
<br>
<br>
<br>

    @endsection
 <script src={{asset("/assets/plugins/jquery/jquery-1.11.1.min.js")}} type="text/javascript"></script>
    <script type="text/javascript">

$(document).ready(function(){
var pp=$('.ques');
//alert(pp.length);
$('.ques').hide();
$('.ques:first').show();





function next(){
  var curr=$('.ques:visible').attr('ques');
  alert(curr);
}

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

$('.buttons').each(function(){
$(this).click(function(){
var bId='#'+$(this).attr('q_connect');
   $('.ques:visible').hide();
   //alert(bId);
    $(bId).show();
    return false;
});
});

function setTimer(){

setInterval(function(){



var min=document.getElementById('min').innerHTML;
var sec =document.getElementById('sec').innerHTML;
document.getElementById('sec').innerHTML=parseInt(sec)-1;
if(document.getElementById('sec').innerHTML==00){
  document.getElementById('min').innerHTML=parseInt(min)-1;
  document.getElementById('sec').innerHTML=59;
}


},1000);


}


setTimer(12,59);






//setExamTimer(9,9);
function fixProgressTracker(){
  $('.radio_button').each(function(){
    $(this).click(function(){
      var checked=$('.radio_button:checked').length;
      var total=($('.radio_button').length)/4;
     // alert(total);
      var new_=Math.floor((checked/total)*100)+'%';
      //alert(new_);
      $('#progressTracker').css('width',new_);
      $('#progressTrackerBar').html(new_);
     
    })
  })
}
function fixAssesmentNavigator(){
  $('.radio_button').each(function(){
    $(this).click(function(){
     // alert('kk');

      var nav = $(this).attr('nav_connect');
      var varId='#bb'+nav;
      $(varId).css('background-color','green');
    })
  })
}
fixProgressTracker();
fixAssesmentNavigator();







});









    </script>