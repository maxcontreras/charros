@extends('cms.cms')
@section('title')
	Crear Partido
@endsection
@section('content')
	<div class="panel panel-default">
	  <div class="panel-body">
	  	{{link_to('/admin/schedule', 'Regresar')}}
	  	<table class="table table-condensed table-hover">
	  		<thead>
	  			<tr>
	  				<th colspan="4">Información de la partido</th>
	  			</tr>
	  		</thead>
	  		<tr>
	  			<td colspan="2">Juego: </td>
	  			<td colspan="2">{{$game->game}}</td>
	  		</tr>
	  		<tr>
	  			<td colspan="2">Fecha del juego: </td>
	  			<td colspan="2">{{strftime("%d de %B %Y", strtotime($game->date))}}</td>
	  		</tr>
	  		<tr>
	  			<td colspan="2">Tipo de juego: </td>
	  			<td colspan="2">{{$game->gametype == 1 ? "Regular" : "Playoffs"}}</td>
	  		</tr>
	  		<tr>
	  			<td>Equipo Local: </td>
	  			<td>{{$game->localTeam->name}}</td>
	  			<td>Equipo Visitante: </td>
	  			<td>{{$game->visitorTeam->name}}</td>
	  		</tr>
	  		<tr>
	  			<td colspan="2">Temporada: </td>
	  			<td colspan="2">{{$game->season->season}}</td>
	  		</tr>
	  		<tr>
	  			<td colspan="2">Tema de partido: </td>
	  			<td colspan="2">{{$game->theme_id == 0 ? "Ninguno" : $game->theme->name}}</td>
	  		</tr>
	  	</table>
	  	{{link_to('/admin/schedule/edit/'.$game->id, 'Editar', array('class' => 'btn btn-primary'))}}
	  </div>
	</div>
@endsection