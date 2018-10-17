@extends('layouts.admin')

@section('title','Agregar Actividad')

@section('content')
	<section class="container">
		<section class="row">
			<section class="col-sm-12">
			    <h2>
			      Nuevo Actividad Socio
			      <a href="{{route('member.index')}}" class="btn btn-primary pull-right">Listar</a>
			    </h2>
			    @include('member.codigo.info')
			    {{-- @include('extras.error') --}}
    {!! Form::open(['route' => 'activity.store', 'files' => true]) !!}
      @include('deportes.codigo.form')
    {!! Form::close() !!}  
			</section>
		</section>
	</section>

@endsection