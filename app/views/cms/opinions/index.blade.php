@extends('cms.cms')
@section('title')
	Todos los reportajes de opinión
@endsection
@section('content')
	<div class="panel panel-default">
	  <div class="panel-body">
	  	{{link_to('/admin/opinions/create', 'Crear Opinión', array('class' => 'btn btn-primary'))}}
	  	<table class="table table-condensed table-hover">
	  		<thead>
	  			<tr>
	  				<th>Título</th>
	  				<th>Fecha</th>
	  				<th>Status</th>
	  			</tr>
	  		</thead>
	  		<tbody>
	  			@foreach($opinions as $opinion) 
	  				@if(!empty($opinion->autor))
			  			<tr>
			  				<td>{{link_to('/admin/opinions/show/'.$opinion->id, $opinion->title)}}</td>
			  				<td>{{link_to('/admin/opinions/show/'.$opinion->id, $opinion->date)}}</td>
			  				<td>{{$opinion->active == 1 ? "Activa" : "Eliminada"}}</td>
			  			</tr>
	  				@endif
	  			@endforeach
	  		</tbody>
	  	</table>
	  	{{$opinions->links()}}
	  </div>
	</div>
@endsection