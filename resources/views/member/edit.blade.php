@extends('layouts.admin')

@section('content')
<section class="container">
	<a href="{{route('member.index') }}" class="btn btn-primary">Listar</a>
	<h2>Editar Miembro</h2>
	{!! Form::model($member,['route' => ['member.update',$member->id], 'method'=>'PUT','files'=>'true' ]) !!}
	@include('member.parcial.form')
	{!! Form::close() !!}
</section>
@endsection