@extends('layouts.anis')
@section('content')
<br><br><br><br><br>
<form  class="form-horizontal col-md-6 col-md-offset-2" role="form" autocomplete="off">
                      <div class="form-group">
                        <label for="fname" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                          <input aria-invalid="true" aria-required="true" class="form-control error" id="fname" placeholder="Full name" name="name" required="" type="text"><label for="fname" class="error" id="fname-error">This field is required.</label>
                        </div>
                      </div>

                   
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Your gender</label>
                        <div class="col-sm-9">
                          <div class="radio radio-success">
                            <input value="male" name="optionyes" id="male" type="radio">
                            <label for="male">Male</label>
                            <input checked="checked" value="female" name="optionyes" id="female" type="radio">
                            <label for="female">Female</label>
                          </div>
                        </div>
                      </div>

                     <div class="form-group">
                        <label for="fname" class="col-sm-3 control-label">Institution</label>
                        <div class="col-sm-9">
                          <input aria-invalid="true" aria-required="true" class="form-control error" id="fname" placeholder="Full name" name="name" required="" type="text"><label for="fname" class="error" id="fname-error">This field is required.</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="fname" class="col-sm-3 control-label">College</label>
                        <div class="col-sm-9">
                          <input aria-invalid="true" aria-required="true" class="form-control error" id="fname" placeholder="Full name" name="name" required="" type="text"><label for="fname" class="error" id="fname-error">This field is required.</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="fname" class="col-sm-3 control-label">Department</label>
                        <div class="col-sm-9">
                          <input aria-invalid="true" aria-required="true" class="form-control error" id="fname" placeholder="Full name" name="name" required="" type="text"><label for="fname" class="error" id="fname-error">This field is required.</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="position" class="col-sm-3 control-label">Position applying for</label>
                        <div class="col-sm-9">
                          <input aria-required="true" class="form-control" id="position" placeholder="Designation" required="" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" id="name" placeholder="Briefly Describe your Abilities"></textarea>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-sm-3">
                          <p>I hereby certify that the information above is true and accurate. </p>
                        </div>
                        <div class="col-sm-9">
                          <button class="btn btn-success" type="submit">Submit</button>
                          <button class="btn btn-default"><i class="pg-close"></i> Clear</button>
                        </div>
                      </div>
                    </form>
                    <br><br><br><br><br>
                    @endsection