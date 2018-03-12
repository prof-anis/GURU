@extends('layouts.discuss')

@section('content')



        <!-- START PAGE CONTENT -->
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
                      <h5 class="text-white no-margin">welcome to discussion board</h5>
                      <h1 class="text-white no-margin"><span class="semi-bold">{{$getBoardDetails->BoardName}}</span>board</h1>
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
                       
                       
<div class="container-fluid p-t-30 p-b-30 ">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="container-xs-height">
                              <div class="row-xs-height">
                                <div class="social-user-profile col-xs-height text-center col-top">
                                  <div class="thumbnail-wrapper d48 circular bordered b-white">
                                    <img alt="Avatar" data-src-retina="assets/img/profiles/avatar_small2x.jpg" data-src="assets/img/profiles/avatar.jpg" src="assets/img/profiles/avatar_small2x.jpg" height="55" width="55">
                                  </div>
                                  <br>
                                  <i class="fa fa-check-circle text-success fs-16 m-t-10"></i>
                                </div>
                                <div class="col-xs-height p-l-20">
                                  <h3 class="no-margin">{{$getBoardDetails->name}}</h3>
                                  <p class="no-margin fs-16">created this group on {{$getBoardDetails->created_at}}
                                  </p>
                                  <p class="hint-text m-t-5 small">San Fransisco Bay | CEO at Pages.inc
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="col-md-6">
                            <p class="m-b-5 small">this group has {{$getBoardDetails->no_of_members}} member</p>
                            <ul class="list-unstyled ">
                              <li class="m-r-10">
                                <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                  <img data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" alt="Profile Image" src="assets/img/profiles/1x.jpg" height="35" width="35">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                  <img data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" alt="Profile Image" src="assets/img/profiles/2x.jpg" height="35" width="35">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                  <img data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" alt="Profile Image" src="assets/img/profiles/3x.jpg" height="35" width="35">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                  <img data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" alt="Profile Image" src="assets/img/profiles/4x.jpg" height="35" width="35">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                  <img data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" alt="Profile Image" src="assets/img/profiles/5x.jpg" height="35" width="35">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                  <img data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" alt="Profile Image" src="assets/img/profiles/6x.jpg" height="35" width="35">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                  <img data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" alt="Profile Image" src="assets/img/profiles/7x.jpg" height="35" width="35">
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


                    <div  class='row'>

                    	
                    	<div id="portlet-advance" class="panel panel-default col2">
                        <div class="panel-heading ">
                          <div class="panel-title">Drop your view here for the world to see
                          </div>
                        
                        </div>
                        <div class="panel-body">
                          <h3>
								<form action='{{route("addpost")}}' method='post'>
								{{csrf_field()}}

                    
              <div class="form-group form-group-default required" id="ReplyPost">
                          <label class="highlight">You selected this message to reply to:</label>
                          <span id="replyShow" class="form-control notification-message" placeholder="Type your message here" value="This notification looks so perfect!" required="" type="text"></span>
                        </div>

                          <textarea id='summernote' name='message'>



                          </textarea>
                          <br>
                         <input type='submit' name='submitPost' value='Post' class='btn btn-primary'>
                          </div>
                        </div>

                      </div>

                    </div>
                </form>
                
                 @foreach($getPosts as $post)
<div style="" class="card share  col2" data-social="item">
                      <div data-original-title="Label" class="circle" data-toggle="tooltip" title="" data-container="body">
                      </div>
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" height="33" width="33">
                        </div>
                        <h5>{{$post->name}}</h5>
                        <h6>Shared a Tweet
									<span class="location semi-bold"><i class="fa fa-map-marker"></i> {{$post->created_at}}</span>
								</h6>

                      </div>
                       @if($post->referenced_message!=='none')
                      <div class='via'>  {{$post->name}} replied to this  {{$getPosts[$post->referenced_message]['name']}} message</div>
                    
                     <div class="card-header clearfix">
                       
                        <h5></h5>
                        <h6>{{$getPosts[$post->referenced_message]['name']}}
									<span class="location semi-bold"><i class="icon-map"></i> {{$getPosts[$post->referenced_message]['message']}}</span>
								</h6>
                      </div>
                     @endif
                      <div class="card-description">

                        <p>{{$post->message}}</p>
                        <div>

                        <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-complete  reply"  rel_message='{{$post->message_id}}'>
                          <input name="options" id="option1" checked="" type="radio"> <span class='fa-reply' >reply</span>
                        </label>
                        <label class="btn btn-complete like" like_link='{!!$post->message_id!!}' data-token='{{csrf_field()}}'>
                          <input name="options" id="option2" type="radio"><span class='pg-like' ></span><span id='{{$post->message_id}}'>{{$post->likes}}</span>
                        </label>
                        <label class="btn btn-complete active">
                          <input name="options" id="option3" type="radio">comment
                        </label>
                      </div></div>
                      </div>
                    </div>
                   @endforeach
                   <span>{{$getPosts->links()}}}}</span>
                   
 <script src={{asset("assets/plugins/jquery/jquery-1.11.1.min.js")}} type="text/javascript"></script>
   
 <script type="text/javascript">

                   $(document).ready(function(){
                    $('#ReplyPost').hide();
                   	$('.like').each(function(){
                   		$(this).click(function(event){


                   			var postId=$(this).attr('like_link');
                        var token=$("input[name='_token']").val();
                        var url_='{{route("like")}}';


                        var data={_token:token,postId:postId}
                       
                      $.post(url_,data,function(msg){
                        //alert(msg);
                        var updater='#'+postId;

                        $(updater).html(msg);
                      })
                      .fail(function(){
                        alert('failed try fixing something here');
                        return true;
                      })
                       return false;
                   		});
                   	})



                     $('.reply').each(function(){
                      $(this).click(function(){
                        alert('g');
                        var rel_message=$(this).attr('rel_message');

                        var url='{{route("reply")}}';
                         var token=$("input[name='_token']").val();
                         var data={_token:token,rel_message:rel_message};

                         $.post(url,data,function(msg){
                          var msg=JSON.parse(msg);
                         // console.log(msg['message']);
                         $('#replyShow').text(msg['message']);
                         $('#ReplyPost').show();
                         })
                      })
                    })

                   })

                   </script>

@endsection