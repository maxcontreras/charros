<!DOCTYPE html>
<html>
	<head>
		<title>Charros CMS | @yield('title')</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- DATEPICKER -->
	  	<link href="{{asset('/plugins/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet" type="text/css" />

	</head>
	<body>
		<div>
			<nav class="navbar navbar-inverse">
				<ul class="nav navbar-nav">
					<li>{{link_to('/admin-home', 'Home')}}</li>
					<li>{{link_to('/admin/news', 'Noticias')}}</li>
					<li>{{link_to('/admin/opinions', 'Opiniones')}}</li>
					<li>{{link_to('/admin/roster', 'Equipo')}}</li>
					<li>{{link_to('/admin/schedule', 'Calendario de Juegos')}}</li>
					<li>{{link_to('/admin/stadium', 'Estadio')}}</li>
				</ul>
			</nav>
		</div>
		<div class="page-header">
		  <h1>¡Bienvenido! <small>Administrador de contenidos Charros Web</small></h1>
		</div>
		@yield('content')

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="{{asset('/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js')}}" type="text/html"></script>
		<script src="{{asset('/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
		<script type="text/javascript">
		$(function(){
			$('.datepicker').datepicker({
			    language: "es",
			    format: "yyyy-mm-dd"
			});
		});
		</script>
	</body>
</html>