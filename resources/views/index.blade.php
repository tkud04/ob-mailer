<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Ob Mailer 1.0</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" >    
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">  
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome.min.css')}}">
    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/summernote.css')}}">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/simple-line-icons.css')}}"> 
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/slicknav.css')}}">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/nivo-lightbox.css')}}" > 
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">   
    
    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/colors/default.css')}}" media="screen" /> 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<div class="container-fluid">

<h3 class="text-success">Ob Mailer 1.0</h3>
  <div class="row">
    <div class="col-md-7 col-xs-12">
	  <div class="form-group">
        <label>Leads</label>
        <textarea class="form-control" id="leads" rows="10" placeholder="Emails go here... One email per line"></textarea>
      </div>
	</div>
	<div class="col-md-5 col-xs-12">
	  <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" id="title" placeholder="Email subject goes here...">
      </div><br>
	  <div class="form-group">
        <label>Message</label>
        <textarea class="form-control" id="msg" rows="10" placeholder="Message goes here... If not required please leave it blank"></textarea>
      </div>
	</div>
	<center>
      <a href="#" class="btn btn-success btn-lg" id="bomb-btn">Send</a>
    </center>
  </div>
  <div class="row">
    <div class="col-md-12">
	  <div id="logs">Logs will be shown here</div><br><br>
	  <div id="logs-loading"></div><br><br>
      <div id="laye"></div>
	</div>
  </div>
</div>
   <!-- jQuery Load -->    
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Summernote-->
    <script src="{{asset('js/summernote.js')}}"></script>
	<!-- Custom -->
    <script src="{{asset('js/custom.js')}}"></script>
  </body>
</html>