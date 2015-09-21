@extends('cms.cms')
@section('title')
	Roster
@endsection
@section('content')
	<div class="panel panel-default">
	  <div class="panel-body">
	  	{{link_to('/admin/roster/create', 'Crear Jugador', array('class' => 'btn btn-primary'))}}
	  	<table class="table table-condensed table-hover">
	  		<thead>
	  			<tr>
	  				<th>Nombre</th>
	  				<th>T/B</th>
	  				<th>Posicion</th>
	  			</tr>
	  		</thead>
	  		<tbody>
	  			@foreach($players as $player) 
		  			<tr>
		  				<td>{{link_to('/admin/roster/show/'.$player->id, $player->name." ".$player->lastname)}}</td>
		  				<td>{{link_to('/admin/roster/show/'.$player->id, $player->tb)}}</td>
		  				<td>{{$player->reserve == 1 ? "Reserva" : "Activo"}}</td>
		  			</tr>
	  			@endforeach
	  		</tbody>
	  	</table>
	  	{{$players->links()}}
	  </div>
	</div>
@endsection