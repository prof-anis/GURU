@extends('layouts.discuss')
@section('content')
<br><br><br><br><br>


<form action='/discuss/addPost' method='post'>
{{csrf_field()}}

<textarea id='summernote' name='message' class='col2'>

create your post here . what you see is what you get

</textarea>
<input type='submit' value='submit'>
</form>


@endsection
