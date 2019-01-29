@extends('layouts.principal')

@section('content')

	<section class="container">

		<a href="{{ route('deportesocio.index',$member->id) }}" class="btn btn-primary">Socios y deportes</a>
		<h2>Asociar deporte socio</h2>
		{!! Form::model($member,['route' => ['deportesocio.update',$member->id], 'method'=>'PUT','files'=>'true' ]) !!}
			@include('deportes.form')
		{!! Form::close() !!}

	</section>

@endsection