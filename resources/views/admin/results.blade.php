@extends('layouts.admin')
@section('content')
@php
$i=0;
@endphp
@foreach($get as $detail)



<div class="col-md-4">
	
                    <div class="panel panel-default">
                      <div class="panel-heading separator">
                        <div class="panel-title">{{$detail->name}} <span class="badge badge-success" title="no of questions">
                        	<a href="{{route('checkexamdetails',['id'=>$get__[$i]->id])}}">view details</a></span>
                        
                        </div>
                      </div>
                      <div class="panel-body">
                       
									
                        <p>

                        	<h5>Score:</h5>
                        	<br>
                        	{{$detail->score}}
                        	
                        </p>


                        </div>
                      </div>

                    </div>
                    
@php
$i++;
@endphp
@endforeach
<div class="col-md-12">{{$get->links()}}</div>

@endsection