@extends('layouts.admin')

@section('title','show')

@section('content')
<section class="container">
<div class="card">
	<div class="row">
<div class="col-md-4">
	  <h4 class="card-title">{{ $member->nombre }} - {{ $member->apellido }}</h4>
	  <img class="card-img-top" src="{{ Storage::url($member->avatar) }}" alt="Card image">
</div>
<div class="col-md-8">
<div class="card-body">
	    <p class="card-text"><strong>e-mail:</strong> {{ $member->mail }}</p>
		<p class="card-text"><strong>DNI:</strong> {{ $member->dni }}</p>
		<p class="card-text"><strong>Teléfono:</strong> {{ $member->phone }}</p>
		<p class="card-text"><strong>Fecha Nacimiento:</strong> {{ $member->nacimiento }}</p>
		<p class="card-text"><strong>Fecha Ingreso:</strong> {{ $member->ingreso }}</p>
		<p class="card-text"><strong>Ciudad:</strong> {{ $member->city->nombre }}</p>
		<p class="card-text"><strong>Dirección:</strong> {{ $member->address }}</p>
			<div class="row">
				<div class="col-md-4">
					<p class="card-text"><strong>Deporte:</strong></p>
				</div>
				<div class="col-md-8">				
						@foreach($member->sports as $sport)
							<p>{{ ($sport->nombre) }}</p>
						@endforeach
				</div>
			</div>	
		<p class="card-text"><strong>Activo:</strong>{{ $member->estado }} </p>		
	    <a href="{{route('member.edit',$member->id) }}" class="btn btn-primary">Editar</a>
</div>	
</div>
</div>

	</div>

</section>
@endsection