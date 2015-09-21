@extends('cms.cms')
@section('title')
	Crear Noticia
@endsection
@section('content')
	<div class="panel panel-default">
	  <div class="panel-body">
	  	{{link_to('/admin/news', 'Regresar')}}
	  	
	  	{{Form::open(array('url'=> $action, 'class' =>'form')) }}
        {{Form::hidden('id', $new->id)}}
	  	<table class="table table-condensed table-hover">
	  		<thead>
	  			<tr>
	  				<th colspan="4">Información de la noticia</th>
	  			</tr>
	  		</thead>
	  		<tr>
	  			<td colspan="2">Título: </td>
	  			<td colspan="2">
	  				{{Form::text('title', $new->title, array('placeholder' => 'título...','class'=>'form-control'))}}
	  			</td>
	  		</tr>
	  		<tr>
	  			<td>Lugar: </td>
	  			<td>
	  				{{Form::text('place', $new->place, array('placeholder' => 'lugar...','class'=>'form-control'))}}
	  			</td>
	  		</tr>
	  		<tr>
	  			<td colspan="2">Descrición: </td>
	  			<td colspan="2">
	  				{{Form::textarea('description', $new->title, array('placeholder' => 'descripcion...','class'=>'form-control'))}}
	  			</td>
	  		</tr>
	  		<tr>
	  			<td colspan="2">Contenido: </td>
	  			<td colspan="2">
	  				{{Form::textarea('content', $new->content, array('placeholder' => 'contenido...','class'=>'form-control'))}}
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