@extends('layouts.principal')

@section('content')

<div class="container">
		<h1>Ver deporte</h1>
		<div class="row">
			<div class="col-md-4">
				<h4 class="card-title">{{ $member->nombre }} - {{ $member->apellido }}</h4>
				<img class="card-img-top" src="{{ Storage::url($member->avatar) }}" alt="Card image">
			</div>
			<div class="col-md-8">
				<table class="table">
					<thead>
						<tr>
							<th>Deporte</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					<tbody>
						@foreach($member->sports as $deporte)
						<tr>
							<td>{{ $deporte->nombre }}</td>
							<td><a href="#" data-target= "#modal-delete-{{ $deporte->id }}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a></td>
						</tr>
						@include('deportes.modal')
						@endforeach	
					</tbody>
				</table>
				<a href="{{ route('deportesocio.edit',$member->id) }}" class="btn btn-primary">Agregar</a>
				<a href="{{ route('member.show',$member->id) }}" class="btn btn-primary">Ver Perfil</a>
			</div>	
		</div>


	</div>
	@endsection