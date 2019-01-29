@extends('layouts.principal')

@section('content')

<div class="container">
		<h1>Index de actualizar deporte</h1>
		<div class="row">
			<div class="col-md-8">
				<table class="table">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Actualizar</th>
						</tr>
					</thead>
					<tbody>
						@foreach($members as $socio)
						<tr>
							<td>{{ $socio->nombre }}</td>
							<td>{{ $socio->apellido }}</td>
							<td><a href="{{ route('deportesocio.show',$socio->id) }}" class="btn btn-primary">Actualizar Deporte</a></td>
						</tr>
						@endforeach	
					</tbody>
				</table>
				{{ $members->links() }}
			</div>	
		</div>
	</div>
	@endsection