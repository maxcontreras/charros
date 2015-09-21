@extends('cms.cms')
@section('title')
	Juegos
@endsection
@section('content')
	<div class="panel panel-default">
	  <div class="panel-body">
	  	{{link_to('/admin/schedule/create', 'Crear Partido', array('class' => 'btn btn-primary'))}}
	  	<table class="table table-condensed table-hover">
	  		<thead>
	  			<tr>
	  				<th>Juego</th>
	  				<th>Temporada</th>
	  				<th>Fecha</th>
	  				<th>Equipo Local</th>
	  				<th>Equipo Visitante</th>
	  				<th>Tema</th>
	  			</tr>
	  		</thead>
	  		<tbody>
	  			@foreach($games as $game) 
	  				@if($game->season_id == 2)
			  			<tr>
			  				<td>{{link_to('/admin/schedule/show/'.$game->id, $game->game)}}</td>
			  				<td>{{link_to('/admin/schedule/show/'.$game->id, $game->season->season)}}</td>
			  				<td>{{link_to('/admin/schedule/show/'.$game->id, strftime("%d de %B %Y", strtotime($game->date)))}}</td>
			  				<td>{{link_to('/admin/schedule/show/'.$game->id, $game->localTeam->name)}}</td>
			  				<td>{{link_to('/admin/schedule/show/'.$game->id, $game->visitorTeam->name)}}</td>
			  				<td>{{$game->theme_id == 0 ? "Ninguno" : $game->theme->name}}</td>
			  			</tr>
	  				@endif
	  			@endforeach
	  		</tbody>
	  	</table>
	  	{{$games->links()}}
	  </div>
	</div>
@endsection