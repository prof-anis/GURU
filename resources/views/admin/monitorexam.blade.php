@extends('layouts.admin')

@section('content')


<div>welcome admin, here you can monitor the exam progress</div>
<div>the exam would not start until you tell it to</div>
<form method="post" action="">
	{{csrf_field()}}
<div><button class="btn btn-complete" id="start">start exam</button></div>
</form>
<div id="loader">ertyuio</div>



<script src={{asset("assets/plugins/jquery/jquery-1.11.1.min.js")}} type="text/javascript"></script>
    
<script type="text/javascript">
$(document).ready(function(){
	
	//});
	


//alert('dd');
	$('#start').click(function(){
		
		if($('#start').text()=='start exam'){
			var msg="are you sure you want to start the exam";
			var start=true;
		}
		else{
			var hh=$('#counter__').text();
			var msg='are you sure you want to end the exam, their are still'+hh+'people writing this eam';
			var start=false;
		}

		if(confirm(msg)){
			var url="{{route('setexamstart')}}";
		 var token=$("input[name='_token']").val();
		// alert(token);
		 var data={_token:token,start:start};
		 $.post(url,data,function(msg){
			alert(msg);
			if($('#start').text()=='start exam'){
			$('#start').text("End Exam");
			//clearInterval();
			
		}
		else{
			$('#start').text('start exam');
			//window.location.assign('');

		}

		 });
		
		 return false;
		}
		else{
			return false;
		}
		
	})

	//about to use set interval to load data here, why is it not working??
/*
function nn(){
		setInterval(function(){
		console.log('dd');
		/*var url="{{route('seerecord')}}"
		$.get(url,function(msg){
			$('#loader').empty();
			$('#loader').append(msg);
		
		}),200000000
	});
	
	
	
	});}
setTimeout(nn(),5000000);*/
})
</script>
@endsection