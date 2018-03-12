@extends('layouts.discuss')


@section('content')
<div class="content ">
          <div class="social-wrapper">
            <div class="social " data-pages="social">
              <!-- START JUMBOTRON -->
              <div class="jumbotron" data-pages="parallax" data-social="cover">
                <div class="cover-photo">
                  <img alt="Cover photo" src="assets/img/social/cover.png" />
                </div>
                <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
                  <div class="inner">
                    <div class="pull-bottom bottom-left m-b-40">
                      <h5 class="text-white no-margin">welcome to Discussion Board</h5>
                      <h1 class="text-white no-margin"><span class="semi-bold">ELE 230</span> cover</h1>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END JUMBOTRON -->
              <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
                <div class="feed">
                  <!-- START DAY -->
                  <div class="day" data-social="day">
                    <!-- START ITEM -->
                    <div class="card no-border bg-transparent full-width" data-social="item">
                      <!-- START CONTAINER FLUID -->
                      <div class="container-fluid p-t-30 p-b-30 ">
                        <div class="row">
                         


                          <div class="col-md-6">
                            <div class="container-xs-height">
                              <div class="row-xs-height">
                                <div class="social-user-profile col-xs-height text-center col-top">
                                  <div class="thumbnail-wrapper d48 circular bordered b-white">
                                    <img alt="Avatar" width="55" height="55" data-src-retina="assets/img/profiles/avatar_small2x.jpg" data-src="assets/img/profiles/avatar.jpg" src="assets/img/profiles/avatar.jpg">
                                  </div>
                                  <br>
                                  <i class="fa fa-check-circle text-success fs-16 m-t-10"></i>
                                </div>
                                <div class="col-xs-height p-l-20">
                                  <h3 class="no-margin">{{Auth::user()->name}}</h3>
                                  <p class="no-margin fs-16">is excited about the new pages design framework
                                  </p>
                                  <p class="hint-text m-t-5 small">San Fransisco Bay | CEO at Pages.inc
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="col-md-6">
                            <p class="m-b-5 small">1,435 Mutual Friends</p>
                            <ul class="list-unstyled ">
                              <li class="m-r-10">
                                <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" alt="Profile Image" src="assets/img/profiles/1.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" alt="Profile Image" src="assets/img/profiles/2.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" alt="Profile Image" src="assets/img/profiles/3.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" alt="Profile Image" src="assets/img/profiles/4.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" alt="Profile Image" src="assets/img/profiles/5.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" alt="Profile Image" src="assets/img/profiles/6.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" alt="Profile Image" src="assets/img/profiles/7.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d32 circular b-white">
                                  <div class="bg-master text-center text-white"><span>+34</span>
                                  </div>
                                </div>
                              </li>
                            </ul>
                            <br>
                            <p class="m-t-5 small">More friends</p>
                          </div>
                        </div>
                      </div>
                      <!-- END CONTAINER FLUID -->
                    </div>
                    <!-- END ITEM -->

                  <div class='col-md-12 '>
                    <br><br><br><br><br><br><br>

                <textarea id='summernote' name='message' class='col2'>

create your post here . what you see is what you get

</textarea>




                    <div class="card share  col1" data-social="item">
                      <div data-original-title="Label" class="circle" data-toggle="tooltip" title="" data-container="body">
                      </div>
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" height="33" width="33">
                        </div>
                        <h5>kkkkkk</h5>
                        <h6>Updated his status
									<span class="location semi-bold"><i class="icon-map"></i> NYC, New York</span>
								</h6>
                      </div>
                      <div class="card-description">
                        <p>kkkk</p>
                        <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-complete">
                          <input name="options" id="option1" checked="" type="radio"> <span class='fa-reply'></span>reply
                        </label>
                        <label class="btn btn-complete">
                          <input name="options" id="option2" type="radio"><span class='pg-like'></span>dddd
                        </label>
                        <label class="btn btn-complete active">
                          <input name="options" id="option3" type="radio">vfgiyv
                        </label>
                      </div>
                      </div>
                    </div>
<div class='row'>
<div class='col-md-9' >
@foreach($getPosts as $post)

                    <div class="card share  col2" data-social="item">
                      <div data-original-title="Label" class="circle" data-toggle="tooltip" title="" data-container="body">
                      </div>
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" height="33" width="33">
                        </div>
                        <h5>{{$post->name}}</h5>
                        <h6>{{$post->created_at}}
									<span class="location semi-bold"><i class="icon-map"></i> NYC, New York</span>
								</h6>
                      </div>
                      @if($post->referenced_message!=='none')
                      <div class='via'>{{$post->name}} replied to this  {{$getPosts[$post->referenced_message]['name']}} message</div>
                    
                     <div class="card-header clearfix">
                       
                        <h5></h5>
                        <h6>{{$getPosts[$post->referenced_message]['name']}}
									<span class="location semi-bold"><i class="icon-map"></i> {{$getPosts[$post->referenced_message]['message']}}</span>
								</h6>
                      </div>
                     @endif
                      <div class="card-description">
                        <p>{{$post->message}}</p>

                        <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-complete">
                          <input name="options" id="option1" checked="" type="radio"> <span class='fa-reply'></span>reply
                        </label>
                        <label class="btn btn-complete">
                          <input name="options" id="option2" type="radio"><span class='pg-like'></span>{{$post->likes}}
                        </label>
                        <label class="btn btn-complete active">
                          <input name="options" id="option3" type="radio">vfgiyv
                        </label>
                      </div>
                      </div>
                    </div>

                    @endforeach



</div>
      </div>

                    <div class="card share  col1" data-social="item">
                      <div data-original-title="Label" class="circle" data-toggle="tooltip" title="" data-container="body">
                      </div>
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" height="33" width="33">
                        </div>
                        <h5>kkkkkk</h5>
                        <h6>Updated his status
									<span class="location semi-bold"><i class="icon-map"></i> NYC, New York</span>
								</h6>
                      </div>
                      <div class="card-description">
                        <p>kkkk</p>
                        <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-complete">
                          <input name="options" id="option1" checked="" type="radio"> <span class='fa-reply'></span>reply
                        </label>
                        <label class="btn btn-complete">
                          <input name="options" id="option2" type="radio"><span class='pg-like'></span>dddd
                        </label>
                        <label class="btn btn-complete active">
                          <input name="options" id="option3" type="radio">vfgiyv
                        </label>
                      </div>
                      </div>
                    </div>




                    <div class="card share  col1" data-social="item">
                      <div data-original-title="Label" class="circle" data-toggle="tooltip" title="" data-container="body">
                      </div>
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" height="33" width="33">
                        </div>
                        <h5>kkkkkk</h5>
                        <h6>Updated his status
									<span class="location semi-bold"><i class="icon-map"></i> NYC, New York</span>
								</h6>
                      </div>
                      <div class="card-description">
                        <p>kkkk</p>
                        <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-complete">
                          <input name="options" id="option1" checked="" type="radio"> <span class='fa-reply'></span>reply
                        </label>
                        <label class="btn btn-complete">
                          <input name="options" id="option2" type="radio"><span class='pg-like'></span>dddd
                        </label>
                        <label class="btn btn-complete active">
                          <input name="options" id="option3" type="radio">vfgiyv
                        </label>
                      </div>
                      </div>
                    </div>
                    
                      {{$getPosts->links()}}


                    @endsection

                    
