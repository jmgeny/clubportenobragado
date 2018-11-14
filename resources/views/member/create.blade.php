@extends('layouts.admin')

@section('title','Create')

@section('content')
	<section class="container">
		<h1>Create Member</h1>
		{!! Form::open(['route'=>'member.store']) !!}
		@include('member.form')
		{!! Form::close() !!}
	</section>

@endsection