@extends('cms.cms')
@section('title')
	{{$player->name}} {{$player->lastname}}
@endsection
@section('content')
	<div class="panel panel-default">
	  <div class="panel-body">
	  	{{link_to('/admin/roster/edit/'.$player->id, 'Editar', array('class' => 'btn btn-primary'))}}
	  	{{link_to('/admin/roster', 'Regresar')}}
	  	<table class="table table-condensed table-hover">
	  		<thead>
	  			<tr>
	  				<th colspan="4">Información de la noticia</th>
	  			</tr>
	  		</thead>
	  		<tr>
	  			<td colspan="2">Nombre: </td>
	  			<td colspan="2">{{$player->name}} {{$player->lastname}}</td>
	  		</tr>
	  		<tr>
	  			<td>Posicion: </td>
	  			<td>{{$player->position->name}}</td>
	  			<td>T/B: </td>
	  			<td>{{$player->tb}}</td>
	  		</tr>
	  		<tr>
	  			<td>Fecha de nacimiento: </td>
	  			<td>{{$player->birthday}}</td>
	  			<td>Lugar de nacimiento: </td>
	  			<td>{{$player->birthplace}}</td>
	  		</tr>
	  		<tr>
	  			<td colspan="2">Reserva o Activo: </td>
	  			<td colspan="2">{{$player->reserve == 1 ? "Reserva" : "Activo"}}</td>
	  		</tr>
	  	</table>
	  	{{link_to('/admin/roster/delete/'.$player->id, 'Eliminar', array('class' => 'btn btn-danger'))}}
	  </div>
	</div>
@endsection