@extends('cms.cms')
@section('title')
	Crear Partido
@endsection
@section('content')
	<div class="panel panel-default">
	  <div class="panel-body">
	  	{{link_to('/admin/schedule', 'Regresar')}}
	  	
	  	{{Form::open(array('url'=> $action, 'class' =>'form')) }}
        {{Form::hidden('id', $game->id)}}
	  	<table class="table table-condensed table-hover">
	  		<thead>
	  			<tr>
	  				<th colspan="4">Información de la partido</th>
	  			</tr>
	  		</thead>
	  		<tr>
	  			<td colspan="2">Juego: </td>
	  			<td colspan="2">
	  				{{Form::text('game', $game->game, array('placeholder' => 'Juego...','class'=>'form-control'))}}
	  			</td>
	  		</tr>
	  		<tr>
	  			<td colspan="2">Fecha del juego: </td>
	  			<td colspan="2">
	  				{{Form::text('date', $game->date, array('placeholder' => 'Fecha...','class'=>'form-control datepicker'))}}
	  			</td>
	  		</tr>
	  		<tr>
	  			<td colspan="2">Tipo de juego: </td>
	  			<td colspan="2">
	  				<select name="gametype">
	  					<option <?php if($game->gametype == 1) { ?> selected="selected" <?php } ?> value="1">Regular</option>
	  					<option <?php if($game->gametype == 2) { ?> selected="selected" <?php } ?> value="2">Playoffs</option>
	  				</select>
	  			</td>
	  		</tr>
	  		<tr>
	  			<td>Equipo Local: </td>
	  			<td>
	  				<select name="localteam_id">
	  					@foreach($teams as $team)
							<option <?php if($team->id == $game->localteam_id) { ?> selected="selected" <?php } ?> value="{{$team->id}}">{{$team->name}}</option>
	  					@endforeach
	  				</select>
	  			</td>
	  			<td>Equipo Visitante: </td>
	  			<td>
	  				<select name="visitorteam_id">
	  					@foreach($teams as $team)
							<option <?php if($team->id == $game->visitorteam_id) { ?> selected="selected" <?php } ?> value="{{$team->id}}">{{$team->name}}</option>
	  					@endforeach
	  				</select>
	  			</td>
	  		</tr>
	  		<tr>
	  			<td colspan="2">Temporada: </td>
	  			<td colspan="2">
	  				<select name="season_id">
	  					@foreach($seasons as $season)
	  						<option <?php if($season->id == $game->season_id) { ?> selected="selected" <?php } ?> value="{{$season->id}}">{{$season->season}}</option>
	  					@endforeach
	  				</select>
	  			</td>
	  		</tr>
	  		<tr>
	  			<td colspan="2">Tema de partido: </td>
	  			<td colspan="2">
	  				<select name="theme_id">
	  					<option value="0">Ninguno</option>
	  					@foreach($themes as $theme)
	  						<option <?php if($theme->id == $game->theme_id) { ?> selected="selected" <?php } ?> value="{{$theme->id}}">{{$theme->name}}</option>
	  					@endforeach
	  				</select>
	  			</td>
	  		</tr>
	  		<tr>
	  			<td>{{Form::submit('Guardar',array('class'=>'btn btn-success')) }}</td>
	  		</tr>
	  	</table>
	  	{{ Form::close() }}
	  </div>
	</div>
@endsection