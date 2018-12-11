@extends('layouts.principal')

@section('title','Club Porteño')

@section('content')

    @include('navigation')

    @include('header')

    @include('actividades')

    @include('noticias')

    @include('about')
	
	<h1 class="text-center">Formulario de Contacto</h1>
    @include('contact')

    @include('footer')

@endsection

