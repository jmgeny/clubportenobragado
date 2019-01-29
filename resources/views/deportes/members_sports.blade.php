@extends('layouts.principal')

@section('content')

<section class="container" style="background-color: red">
	
@foreach($members as $socio)
	{{ $socio->nombre }}
@endforeach	
</section>

@endsection