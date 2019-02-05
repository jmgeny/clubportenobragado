@extends('layouts.admin')

@section('content')
<section class="container">
	<h3>Crear Nota
		<a href="{{ url('admin/nota') }}" class="btn btn-primary pull-right">Listado</a>
	</h3> 

	{!! Form::open(['route' => 'nota.store','files'=>'true']) !!}
	   @include('nota.form')
	{!! Form::close() !!}

</section>

@endsection