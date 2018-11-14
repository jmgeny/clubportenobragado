@extends('layouts.admin')

@section('title','Edit')

@section('content')
	<section class="container">
		<h1>Edit Member</h1>
		{!! Form::model($member,['route' => ['member.update',$member->id], 'method'=>'PUT' ]) !!}
			@include('member.form')
		{!! Form::close() !!}
	</section>
@endsection