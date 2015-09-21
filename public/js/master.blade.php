<!DOCTYPE html >
<html>
	<head>
		<title>Interactive-s | @yield('tittle')</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<link href="{{asset('css/interactive.css')}}" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css"/>
  		
  		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		
  		<script type="text/javascript" src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
  		
  		<script type="text/html" src="{{asset('js/jquery.js')}}"></script>
		
		
		<script type="text/javascript" src="{{asset('js/jquery.panorama.js')}}"></script>
		<link rel="stylesheet" type="text/css" href="{{asset('js/jquery.panorama.css')}}" />
	</head>
	<body>
		<div class="content">
			@yield('content')
		</div>
	</body>
</html>