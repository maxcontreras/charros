@extends('cms.cms')
@section('title')
	Crear Jugador
@endsection
@section('content')
	<div class="panel panel-default">
	  <div class="panel-body">
	  	{{link_to('/admin/roster', 'Regresar')}}
	  	{{Form::open(array('url'=> $action, 'class' =>'form')) }}
        {{Form::hidden('id', $player->id)}}
	  	<table class="table table-condensed table-hover">
	  		<thead>
	  			<tr>
	  				<th colspan="4">Información del jugador</th>
	  			</tr>
	  			<tr>
	  				<td>Nombre: </td>
	  				<td>{{Form::text('name', $player->name, array('placeholder' => 'nombre...','class'=>'form-control'))}}</td>
	  				<td>Apellido: </td>
	  				<td>{{Form::text('lastname', $player->lastname, array('placeholder' => 'apellido...','class'=>'form-control'))}}</td>
	  			</tr>
	  			<tr>
	  				<td>Posicion: </td>
	  				<td>
	  					<select name="position_id">
	  						<option value="0">Seleccione una opción</option>
	  						@foreach($positions as $position)
								<option <?php if($position->id == $player->position_id) { ?> selected="selected" <?php } ?> value="{{$position->id}}">{{$position->name}}</option>
	  						@endforeach
	  					</select>
	  				</td>
	  				<td>T/B</td>
	  				<td>{{Form::text('tb', $player->tb, array('placeholder' => 't/b...','class'=>'form-control'))}}</td>
	  			</tr>
	  			<tr>
	  				<td>Fecha de nacimiento: </td>
	  				<td>{{Form::text('birthday', $player->birthday, array('placeholder' => 'fecha de nacimiento...','class'=>'form-control'))}}</td>
	  				<td>Lugar de nacimiento: </td>
	  				<td>{{Form::text('birthplace', $player->birthplace, array('placeholder' => 'lugar de nacimiento...','class'=>'form-control'))}}</td>
	  			</tr>
	  			<tr>
	  				<td>Reserva: </td>
	  				<td>
	  					<select name="reserve">
	  						<option <?php if($player->reserve == 0) { ?> selected="selected" <?php } ?> value="0">Activo</option>
	  						<option <?php if($player->reserve == 1) { ?> selected="selected" <?php } ?> value="1">Reserva</option>
	  					</select>
	  				</td>
	  				<td>Nacionalidad: </td>
	  				<td>
	  					<select name="foreign">
	  						<option <?php if($player->foreign == 0) { ?> selected="selected" <?php } ?> value="0">Nacional</option>
	  						<option <?php if($player->foreign == 1) { ?> selected="selected" <?php } ?> value="1">Extranjero</option>
	  					</select>
	  				</td>
	  			</tr>
	  			<tr>
	  				<td colspan="4">{{Form::submit('Guardar',array('class'=>'btn btn-success')) }}</td>
	  			</tr>
	  		</thead>
	  	</table>
	  {{ Form::close() }}
	  </div>
	</div>
@endsection