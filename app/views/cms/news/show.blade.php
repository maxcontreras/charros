@extends('cms.cms')
@section('title')
	{{$new->title}}
@endsection
@section('content')
	<div class="panel panel-default">
	  <div class="panel-body">
	  	{{link_to('/admin/news/edit/'.$new->id, 'Editar', array('class' => 'btn btn-primary'))}}
	  	{{link_to('/admin/news', 'Regresar')}}
	  	<table class="table table-condensed table-hover">
	  		<thead>
	  			<tr>
	  				<th colspan="4">Información de la noticia</th>
	  			</tr>
	  		</thead>
	  		<tr>
	  			<td colspan="2">Titulo: </td>
	  			<td colspan="2">{{$new->title}}</td>
	  		</tr>
	  		<tr>
	  			<td>Fecha: </td>
	  			<td>{{$new->date}}</td>
	  			<td>Lugar: </td>
	  			<td>{{$new->place}}</td>
	  		</tr>
	  		<tr>
	  			<td colspan="2">Descrición: </td>
	  			<td colspan="2">{{$new->description}}</td>
	  		</tr>
	  		<tr>
	  			<td colspan="2">Contenido: </td>
	  			<td colspan="2">{{$new->content}}</td>
	  		</tr>
	  	</table>
	  	{{link_to('/admin/news/delete/'.$new->id, 'Eliminar', array('class' => 'btn btn-danger'))}}
	  </div>
	</div>
@endsection