@extends('layouts.admin')

@section('content')
<section class="container">
	<h3>Editar Nota
		<a href="{{ url('admin/nota') }}" class="btn btn-primary pull-right">Listado</a>
	</h3> 

	{!! Form::model($nota,['route' => ['nota.update',$nota->id], 'method'=>'PUT','files' =>'true' ]) !!}
	   @include('nota.form')
	{!! Form::close() !!}

</section>

@endsection