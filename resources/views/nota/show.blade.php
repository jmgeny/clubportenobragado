@extends('layouts.admin')

@section('title','Ver Notas')

@section('content')
	<section class="container">
		<h1>Nota: {{ $nota->titulo }}<a href="{{ url('admin/nota') }}" class="btn btn-primary pull-right">Listado</a></h1>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
  				<div class="card-header">{{ $nota->titulo }}</div>
  				<div class="card-body">
  					<p>{{ $nota->descripcion }}</p>
  					<p>{{ $nota->desarrollo }}</p>
  				</div> 
  				<div class="card-footer">{{ $nota->fecha }}
  					<a href="{{ route('nota.edit', $nota->id) }}" class="btn btn-primary pull-right">Editar</a>
  				</div>
  			</div>
		</div>
	</div>

	</section>

@endsection