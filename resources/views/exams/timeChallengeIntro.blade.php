  @extends('layouts.anis')

@section('content')
<br>
<br><br><br><br><br>
 <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">you are welcome, you would be writing {{$course}} </div>
                    kindly note that<br>

                    <div class="panel-body">
                        <ol> 
                    <li> the exam would last this number of hours {{$details['time']}} minutes</li>
                    <li> kindly ensure you are properly prepared for it</li>
                    <li>you have {{$details['no_of_questions']}} number of questions to answer</li>
                     <li>you can start by clicking on start else you can leave the page by clicking go back</li>
                    </ol>
                    <form action = '/exam/start/{{$course}}' method='post'>
                    	{{csrf_field()}}
                    	<button class='btn btn-small blue'>start</button>
                    </form>
                    <a href="/home">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection