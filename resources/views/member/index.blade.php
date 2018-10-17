@extends('layouts.admin')

@section('title','Index')

@section('content')
<h1>index</h1>
<a href="{{route('member.create') }}" class="btn btn-primary">Crear</a>
<br>

@include('member.codigo.info')
<table class="table">
	<thead>
		<tr>
			<th>Apellido</th>
			<th>Nombre</th>
			<th>e-mail</th>
			<th>Actividades</th>
			<th>DNI</th>
			<th>Teléfono</th>
			<th>Nacimiento</th>
			<th>Fecha ingreso</th>
			<th>Domicilio</th>
			<th>Ciudad</th>
			<th>Edit</th>
			<th>Ver</th>
			{{-- <th>Borrar</th> --}}
		</tr>
	</thead>
	<tbody>
		@foreach($members as $member)
		<tr>
			<td>{{ $member->apellido }}</td>
			<td>{{ $member->nombre }}</td>
			<td>{{ $member->mail }}</td>
			<td> 
{{-- 				@if ($member->sports)
					<select class="selSocios">
						@foreach($member->sports as $sport)
							<option value="{{ $sport->id }}">{{ $sport->nombre }}</option>
						@endforeach 
					</select>			
				@endif  	 --}}
				<ul>
					@foreach($member->sports as $sport)
						<li>{{ $sport->nombre }}</li>
						<a href="{{ route('member.borrar') }}"></a>

					@endforeach
				</ul>
			</td>
			<td>{{ $member->dni }}</td>
			<td>{{ $member->phone }}</td>
			<td>{{ $member->nacimiento }}</td>
			<td>{{ $member->ingreso }}</td>
			<td>{{ $member->address }}</td>
			<td>{{ $member->city->name }}</td>
			<td><a href="{{route('member.edit',$member->id) }}" class="btn btn-primary">Edit</a></td>
			<td><a href="{{route('member.show',$member->id) }}" class="btn btn-primary">Ver</a></td>
{{-- 			<td>
			    <form action="{{ route('member.destroy',$member->id) }}" method="POST">
	              {{ csrf_field() }}
	              <input type="hidden" name="_method" value="DELETE">
	              <button class="btn btn-danger">Borrar</button>
	            </form>
			</td> --}}
		</tr>
		@endforeach
	</tbody>
</table>
 
	{{ $members->links() }}
@endsection