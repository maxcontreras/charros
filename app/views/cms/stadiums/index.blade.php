@extends('cms.cms')
@section('title')
	Estadios
@endsection
@section('content')
	<div class="panel panel-default">
	  <div class="panel-body">
	  	{{link_to('/admin/stadiums/all', 'Ver otros estadios', array('class' => 'btn btn-primary'))}}
	  	<h2>{{$zones[0]->stadium}}</h2>
	  	<table class="table table-condensed table-hover">
	  		<thead>
	  			<tr>
	  				<th>Zona</th>
	  				<th>Precio</th>
	  				<th>Tipo Partido</th>
	  				<th></th>
	  			</tr>
	  		</thead>
	  		<tbody>
	  			@foreach($zones as $zone) 
	  				<tr>
	  					<td>{{$zone->zone}}</td>
	  					<td class="number-row">${{$zone->price}}</td>
	  					<td>{{$zone->gametype == 1 ? "Temporada regular" : "Juego de playoff"}}</td>
	  					<td>
	  						{{link_to('/admin/stadium/edit-zoneprice/'.$zone->price_id, 'Modificar')}}
	  						{{link_to('/admin/stadium/delete-zoneprice/'.$zone->price_id, 'Eliminar')}}
	  					</td>
	  				</tr>
	  			@endforeach
	  		</tbody>
	  	</table>
	  </div>
	</div>
@endsection