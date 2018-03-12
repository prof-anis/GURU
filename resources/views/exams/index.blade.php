@extends('layouts.anis')
@section('title')
GURU|exam
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<br>




        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <ul class='list-group'>

                	@foreach($available_courses as $available_course)

				<form method='post' action='/exam/exam_intro/{{App\Http\Controllers\HelpEncrypt::hasher($available_course,'e')}}'>
					{{ csrf_field() }}
                	<li class='list-group-item' style='margin-top:20px'>
                		<span>
							{{ $available_course }}
                		</span>
                		<span class='pull-right clear-fix'>
                			<select id='selectMode' name='course_mode_{{$available_course}}' class=''>
                                <option value='{{$mode}}'  >{{$mode}}</option>
                                            </select>
                            
                			<button class='btn btn-sm  '>Attempt</button>

                		</span>
                        <br> <span class='pull-rights'></span>
                		</li>

                    </form>
                        



                	@endforeach







                </ul>

                     
                    </div>
                </div>
                 </form>
            </div>
        </div>
    </div>

@endsection



<script src={{asset("/assets/plugins/jquery/jquery-1.11.1.min.js")}} type="text/javascript"></script>
    <script type="text/javascript">


$(document).ready(function(){
// alert($('.course').length);
 
$('.course').each(function(){
    $(this).click(function(){
     
        var id=$(this).attr('link');

       id='#'+id;
       var fill='<input type="text" placeholder="number of questions" required name="no_of_questions"><input type="text" placeholder="time in minutes" required name="time">';
        $(id).html(fill);
         $(id).show();
    })
})

$('.otherModes').each(function(){
    $(this).click(function(){
         var id=$(this).attr('link');

       id='#'+id;
        $(id).hide();
    })
})

    });

</script>

</script>


