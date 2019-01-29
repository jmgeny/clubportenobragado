@extends('layouts.admin')

@section('title','Ver Notas')

@section('content')
	<section class="container">
		<h1>Nota: {{ $nota->titulo }}<a href="{{ url('admin/nota') }}" class="btn btn-primary pull-right">Listado</a></h1>
	<div class="row">
  <div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="card">
  				<div class="card-header">{{ $nota->titulo }}</div>
          <img src="{{ Storage::url($nota->avatar) }}" alt="img" width="100%">
  				<div class="card-body">
  					<p>{{ $nota->descripcion }}</p>
  					<pre>{{ $nota->desarrollo }}</pre>
  				</div> 
  				<div class="card-footer">{{ $nota->fecha }}
  					<a href="{{ route('nota.edit', $nota->id) }}" class="btn btn-primary pull-right">Editar</a>
  				</div>
  			</div>
		</div>
  <div class="col-md-2"></div>    
	</div>

	</section>

@endsection