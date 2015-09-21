<!DOCTYPE html>
<html>
	<head>
		<title>Charros Web | @yield('tittle')</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link href="{{asset('css/common.css')}}" rel="stylesheet" type="text/css">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		@if($theme == 1)			<!-- Load theme CSS file --> 
			<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
		@elseif($theme == 2)		<!-- Load theme CSS file -->
			<link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css">
		@elseif($theme == 3)		<!-- Load theme CSS file -->
			<link href="{{asset('css/piroctenia.css')}}" rel="stylesheet" type="text/css">
		@endif
		<!-- Calendar CSS files -->
		<link rel="stylesheet" href="{{asset('plugins/calendar/eventCalendar.css')}}">
		<link rel="stylesheet" href="{{asset('plugins/calendar/eventCalendar_theme_responsive.css')}}">

		<link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<!-- Calendar JS file -->
		<script src="{{asset('plugins/calendar/jquery.eventCalendar.js')}}" type="text/javascript"></script>
	</head>
	<body>
		<div class="header">
			<!-- <ul>
				<li>Equipo</li>
				<li>Organizacion</li>
				<li>Juegos</li>
				<li>Estadísticas</li>
				<li>Noticias</li>
			</ul> -->
		</div>
		@yield('content')
	</body>
	<script type="text/javascript">
	$(function(){
		$("#eventCalendarHumanDate").eventCalendar({
			eventsjson: 'json/event.humanDate.json.php',
			jsonDateFormat: 'human'  // 'YYYY-MM-DD HH:MM:SS'
		});
	});
	</script>
</html>