@extends('layouts.admin')

@section('title','Index')

@section('content')
	<section class="container">

		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h1>Listado de socios</h1>
						{!! Form::open(['url' => 'admin/member', 'method'=>'GET','class'=>'form-inline pull-right']) !!}
						<div class="form-group">
							{{ Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre']) }}
						</div>
						<div class="form-group">
							{{ Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Apellido']) }}
						</div>
						<div class="form-group">
							{{ Form::text('mail',null,['class'=>'form-control','placeholder'=>'e-mail']) }}
						</div>
						<div class="form-group">
							{{-- {{ Form::text('estado',null,['class'=>'form-control','placeholder'=>'estado']) }} --}}
							{{ Form::select('estado',['1'=> 'Activo', '0'=>'todos' ], null, ['class'=>'form-control', 'placeholder'=> 'Estado']) }}
						</div>						
						<div class="form-group">
							<button type="submit" class="btn btn-default">
								<span class="glyphicon glyphicon-search">buscar</span>
							</button>
						</div>												
						{!! Form::close() !!}
				</div>

			</div>
		</div>

		<div class="m-5">
			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Nombre</th>
			        <th>Apellido</th>
			        <th>Email</th>
			        <th>DNI</th>
			        <th>Estado</th>
			        <th>Ver</th>
			        <th>Editar</th>
			        <th>Eliminar</th>
			      </tr>
			    </thead>
				<tbody>
			    	@foreach($members as $member)
				      <tr>
				        <td>{{ $member->nombre }}</td>
				        <td>{{ $member->apellido }}</td>
				        <td>{{ $member->mail }}</td>
				        <td>{{ $member->dni }}</td>
				        <td>{{ $member->estado }}</td>
				        <td><a href="{{ route('member.show',$member->id) }}" class="btn btn-primary">Ver</a></td>
				        <td><a href="{{route('member.edit',$member->id) }}" class="btn btn-primary">Edit</a></td>
				        <td>
			        		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-delete-{{ $member->id }}">Eliminar</button>
				        </td> 
				      </tr>
				      @include('member.modal')
			      	@endforeach
				</tbody>
			</table>
		</div>		
{{ $members->links() }}
	</section>

@endsection