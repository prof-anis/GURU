@extends('layouts.anis')
@section('content')
<br><br><br><br><br><br>

<form method="post" action="{{route('createGroup')}}">
	{{csrf_field()}}
		<div class="form-group form-group-default col-md-4">
		                            <label>Board Name</label>
		                            <input placeholder="Default input" class="form-control" type="text" name="name">
				                          </div>
				                          <br>
		<div class="form-group form-group-default col-md-4">
		                            <label>Board Description</label>
		                            <input placeholder="Default input" class="form-control" type="text" name="description">
		                          </div>
		                          <br>
		<div class="checkbox check-success checkbox-circle">
                      <input value="1" id="checkbox8" type="checkbox" name="is_closed">
                      <label for="checkbox8">should it be a closed group</label>
                    </div>
        

        <div class="form-group form-group-default col-md-4">
		                            <label>Board Category</label>
		                            <select placeholder="Default input" class="form-control" name="category">
		                            	<option value="technology">technology</option>
		                            	<option value="education">education</option>
		                            	<option value="mts 233">mts 233</option>
		                            	<option value="ele230">ele230</option>

		                            </select>
							</div>
							<br>
		<div class="checkbox check-success checkbox-circle">
                      <input value="1" id="checkbox7" type="checkbox" name="discussion_made_public">
                      <label for="checkbox7">should the group discussion be made public</label>
                    </div>
         <div class="">
         	<input type="submit" value="Create Group" class="btn btn-complete">
         </div>

     </form>
		                          



      

@endsection

 <script src={{asset("/assets/js/form_elements.js")}} type="text/javascript"></script>
    <script src={{asset("/assets/js/scripts.js")}} type="text/javascript"></script>