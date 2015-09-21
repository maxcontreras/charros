@extends('cms.cms')
@section('title')
	{{$opinion->title}}
@endsection
@section('content')
	<div class="panel panel-default">
	  <div class="panel-body">
	  	{{link_to('/admin/opinions', 'Regresar')}}
	  	
	  	{{Form::open(array('url'=> $action, 'class' =>'form')) }}
        {{Form::hidden('id', $opinion->id)}}
	  	<table class="table table-condensed table-hover">
	  		<thead>
	  			<tr>
	  				<th colspan="4">Información del reportaje de opinión</th>
	  			</tr>
	  		</thead>
	  		<tr>
	  			<td colspan="2">Título: </td>
	  			<td colspan="2">
	  				{{Form::text('title', $opinion->title, array('placeholder' => 'título...','class'=>'form-control'))}}
	  			</td>
	  		</tr>
	  		<tr>
	  			<td>Lugar: </td>
	  			<td>
	  				{{Form::text('place', $opinion->place, array('placeholder' => 'lugar...','class'=>'form-control'))}}
	  			</td>
	  		</tr>
	  		<tr>
	  			<td colspan="2">Descrición: </td>
	  			<td colspan="2">
	  				{{Form::textarea('description', $opinion->title, array('placeholder' => 'descripcion...','class'=>'form-control'))}}
	  			</td>
	  		</tr>
	  		<tr>
	  			<td colspan="2">Contenido: </td>
	  			<td colspan="2">
	  				{{Form::textarea('content', $opinion->content, array('placeholder' => 'contenido...','class'=>'form-control'))}}
	  			</td>
	  		</tr>
	  		<tr>
	  			<td colspan="2">Autor: </td>
	  			<td colspan="2">
	  				{{Form::text('autor', $opinion->autor, array('placeholder' => 'autor...','class'=>'form-control'))}}
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