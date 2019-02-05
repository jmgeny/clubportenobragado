@extends('layouts.admin')

@section('content')
	<section class="container">
		<h1>Notas<a class="btn btn-primary pull-right" href="{{route('nota.create') }}">Crear</a></h1>
	<div class="row">
		@foreach($notas as $nota)
		<div class="col-md-4">
			<div class="card">
  				<div class="card-header">{{ $nota->titulo }}
  					
					<img src="{{ Storage::url($nota->avatar) }}" alt="img" width="100%">
  				</div>
  				<div class="card-body">
  					<pre>{{ $nota->descripcion }}</pre>
  					{{-- <p>{{ $nota->desarrollo }}</p> --}}
  				</div> 
  				<div class="card-footer">{{ $nota->fecha }}
  					<a href="{{ route('nota.show', $nota->id) }}" class="btn btn-primary pull-right">Ver</a>
  				</div>
  			</div>
		</div>
		@endforeach
	</div>

	</section>

@endsection