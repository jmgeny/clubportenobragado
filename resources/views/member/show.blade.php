@extends('layouts.admin')

@section('title','show')

@section('content')
<section class="container">
	<div class="row">
		<div class="col-sm-3 text-center">
			<h3>{{ $member->nombre }} - {{ $member->apellido }}</h3>
			<img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('img/profile.jpg') }}" alt="">
			<li><h4>{{ $member->mail }}</h4></li>
		</div>
		<div class="col-sm-9">
<ul class="nav navbar-nav">
	<li>Deprote:
		<ul>
			@foreach($member->sports as $sport)
				<li>{{ ($sport->nombre) }}</li>
			@endforeach
		</ul>
	</li>
	<li>{{ $member->dni }}</li>
	<li>{{ $member->phone }}</li>
	<li>{{ $member->nacimiento }}</li>
	<li>{{ $member->ingreso }}</li>
	<li>{{ $member->address }}</li>
	<li>{{ $member->city->name }}</li>		
</ul>
		</div>
	</div>
	<a href="{{route('member.edit',$member->id) }}" class="btn btn-primary">Edit</a>
</section>
@endsection