@extends('layouts.admin')

@section('title','Create')

@section('content')
	<section class="container">
		<section class="row">
			<section class="col-sm-12">
			    <h2>
			      Nuevo Miembro
			      <a href="{{route('member.index')}}" class="btn btn-primary pull-right">Listar</a>
			    </h2>
			    @include('member.codigo.info')
			    {{-- @include('extras.error') --}}
    {!! Form::open(['route' => 'member.store', 'files' => true]) !!}
      @include('member.codigo.form')
    {!! Form::close() !!}  

			</section>
		</section>
	</section>

@endsection