@extends('layouts.deportes')

@section('title','Eventos')

@section('content')

@section('logo','img/iconos/eventos.png')

@include('navdeportes')

@include('actividades.navbar')

    <div class="container-fluid p-0">
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Espacio Porteño</h1>
          <div class="subheading mb-5">EL ESPACIO PARA SU PRÓXIMO EVENTO
          </div>
          <p class="lead mb-2">Dos espacios disponibles por separado o juntos</p>
          <p class="lead mb-2">Un espacio de 22m y uno de 55m</p>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5">Actividades</h2>
          <ul>
            <li><h4><p>Eventos corporativos</p></h4></li>
            <li><h4><p>Reuniones de Negocios</p></h4></li>
            <li><h4><p>Casamientos</p></h4></li>
            <li><h4><p>Fiestas de compromiso</p></h4></li>
            <li><h4><p>Baby Showers</p></h4></li>
            <li><h4><p>Cumpleaños</p></h4></li>
            <li><h4><p>Cenas Privadas</p></h4></li>
          </ul>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="my-auto">
          <h2 class="mb-5">Consultar Horarios en el Club</h2>
        </div>
      </section>

{{--       <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="fotos">
        <div class="my-auto">
          <img src="{{ asset('img/fotos.jpg') }}" alt="" class="img-thumbnail">
          <img src="{{ asset('img/fotos.jpg') }}" alt="" class="img-thumbnail">
          <img src="{{ asset('img/fotos.jpg') }}" alt="" class="img-thumbnail">
          <img src="{{ asset('img/fotos.jpg') }}" alt="" class="img-thumbnail">
          <img src="{{ asset('img/fotos.jpg') }}" alt="" class="img-thumbnail">
          <img src="{{ asset('img/fotos.jpg') }}" alt="" class="img-thumbnail">
          <img src="{{ asset('img/fotos.jpg') }}" alt="" class="img-thumbnail">
          <img src="{{ asset('img/fotos.jpg') }}" alt="" class="img-thumbnail">
        </div>
      </section> --}}
    </div>
    
@endsection