<!DOCTYPE html>
<html>
  
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href={{asset("/assets/plugins/pace/pace-theme-flash.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("/assets/plugins/boostrapv3/css/bootstrap.min.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("/plugins/font-awesome/css/font-awesome.css")}} rel="stylesheet" type="text/css" />
   
    <link href={{asset("/css/pages-icons.css")}} rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href={{asset("/pages/css/pages.css")}} rel="stylesheet" type="text/css" />
    <!--[if lte IE 9]>
  <link href="{{asset("/assets/plugins/codrops-dialogFx/dialog.ie.css")}} rel="stylesheet" type="text/css" media="screen" />
  <![endif]-->
   @extends('layouts.js')
  </head>
  <body class="fixed-header error-page">
    <div class="container-xs-height full-height">
      <div class="row-xs-height">
        <div class="col-xs-height col-middle">
         <center><h1>the only available exam is {{$get->course}} and you have attempted it already</h1>
      <br><a href="/home" class="btn btn-success">Go Home</a>  </center></div>

      </div>
    </div>
    <div class="pull-bottom sm-pull-bottom full-width">
      <div class="error-container">
        <div class="error-container-innner">
          <div class="m-b-30 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
            <div class="col-sm-3 no-padding">
              <img alt="" class="m-t-5" data-src="assets/img/demo/pages_icon.png" data-src-retina="assets/img/demo/pages_icon_2x.png" height="60" src="assets/img/demo/pages_icon.png" width="60">
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <!-- END PAGE CONTAINER -->
   
  </body>
</html>