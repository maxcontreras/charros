<!DOCTYPE html>
<html>
	<head>
		<title>Login Charros® @yield('tittle')</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	</head>
	<body>
		<div>
			{{Form::open(array('url'=>'/login/logon'))}}
			<table>
				<tr>
					<td>E-mail: </td>
					<td>{{Form::text('email', '', array('class' => 'form-control', 'id' => 'email'))}}</td>
				</tr>
				<tr>
					<td>Contraseña: </td>
					<td>{{Form::password('password', '', array('class' => 'form-control', 'id' => 'password'))}}</td>
				</tr>
				<tr>
					<td><button class="btn btn-primary btn-cons pull-right" type="submit">Entrar</button></td>
				</tr>
			</table>
			{{Form::close()}}
		</div>
	</body>
</html>