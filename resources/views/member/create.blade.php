@extends('layouts.admin')

@section('title','Create')

@section('content')
	<section class="container">
		<a href="{{route('member.index') }}" class="btn btn-primary">Listar</a>
		<h2>Create Member</h2>
		{!! Form::open(['route'=>'member.store','files'=>'true']) !!}
		@include('member.form')
		{!! Form::close() !!}
	</section>

@endsection