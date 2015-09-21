@extends('cms.cms')
@section('title')
	{{$opinion->title}}
@endsection
@section('content')
	<div class="panel panel-default">
	  <div class="panel-body">
	  	{{link_to('/admin/opinions/edit/'.$opinion->id, 'Editar', array('class' => 'btn btn-primary'))}}
	  	{{link_to('/admin/opinions', 'Regresar')}}
	  	<table class="table table-condensed table-hover">
	  		<thead>
	  			<tr>
	  				<th colspan="4">Información del reportaje de opinión</th>
	  			</tr>
	  		</thead>
	  		<tr>
	  			<td colspan="2">Titulo: </td>
	  			<td colspan="2">{{$opinion->title}}</td>
	  		</tr>
	  		<tr>
	  			<td>Fecha: </td>
	  			<td>{{$opinion->date}}</td>
	  			<td>Lugar: </td>
	  			<td>{{$opinion->place}}</td>
	  		</tr>
	  		<tr>
	  			<td colspan="2">Descrición: </td>
	  			<td colspan="2">{{$opinion->description}}</td>
	  		</tr>
	  		<tr>
	  			<td colspan="2">Contenido: </td>
	  			<td colspan="2">{{$opinion->content}}</td>
	  		</tr>
	  		<tr>
	  			<td colspan="2">Autor: </td>
	  			<td colspan="2">{{$opinion->autor}}</td>
	  		</tr>
	  	</table>
	  	{{link_to('/admin/opinions/delete/'.$opinion->id, 'Eliminar', array('class' => 'btn btn-danger'))}}
	  </div>
	</div>
@endsection