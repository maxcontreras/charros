@extends('cms.cms')
@section('title')
	Todas las noticias
@endsection
@section('content')
	<div class="panel panel-default">
	  <div class="panel-body">
	  	{{link_to('/admin/news/create', 'Crear Noticia', array('class' => 'btn btn-primary'))}}
	  	<table class="table table-condensed table-hover">
	  		<thead>
	  			<tr>
	  				<th>Título</th>
	  				<th>Fecha</th>
	  				<th>Status</th>
	  			</tr>
	  		</thead>
	  		<tbody>
	  			@foreach($news as $new) 
	  				@if(empty($new->autor))
			  			<tr>
			  				<td>{{link_to('/admin/news/show/'.$new->id, $new->title)}}</td>
			  				<td>{{link_to('/admin/news/show/'.$new->id, $new->date)}}</td>
			  				<td>{{$new->active == 1 ? "Activa" : "Eliminada"}}</td>
			  			</tr>
	  				@endif
	  			@endforeach
	  		</tbody>
	  	</table>
	  	{{$news->links()}}
	  </div>
	</div>
@endsection