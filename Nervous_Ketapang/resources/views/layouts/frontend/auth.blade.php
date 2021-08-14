<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width,initial-scale=1">
    <title>@yield('title')</title>
	<meta name="description" content="Platform pesan - antar untuk pebisnis PO, JASA & suply produk. Diprioritaskan untuk Kab. Ketapang">
    <link href="https://i.ibb.co/kQ6x5MY/LOGO.png" rel="shortcut icon">
    <!-- Vendor css -->
    <link href="{{asset('frontend/assets/bootstrap_slim/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/bootstrap_slim/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet">
    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap_slim/css/slim.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap_slim/css/slim.one.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/assets/bootstrap_slim/css/scrollbar.css')}}">
		<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		
		<!-- search icon -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="{{asset('frontend/assets/bootstrap_slim/css/online.css')}}">
        <link rel="stylesheet" href="https://fontawesome.com/v4.7/icon/user">
        <link rel="stylesheet" href="https://fontawesome.com/v5.15/icons/edit">
<!-- <link rel="stylesheet" type="text/css" href="/css/style.css"> -->


  </head>
  <body>
    
    @yield('content')


    <!-- script -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="{{asset('frontend/assets/bootstrap_lim/js/chekbox.js')}}"></script>
	
		<script src="{{asset('frontend/assets/bootstrap_slim/lib/jquery/js/jquery.js')}}"></script>
   		<script src="{{asset('frontend/assets/bootstrap_slim/lib/popper.js/js/popper.js')}}"></script>
    	<script src="{{asset('frontend/assets/bootstrap_slim/lib/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{asset('frontend/assets/bootstrap_slim/js/slim.js')}}"></script>
  </body>
    </html>