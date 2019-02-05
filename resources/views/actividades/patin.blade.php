@extends('layouts.deportes')

@section('title','Patin')

@section('content')

@include('navdeportes')

@include('actividades.navbar')

    <div class="container-fluid p-0">
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <img class="rounded pull-right" src="img/iconos/patin.png"  alt="">
          <h1 class="mb-0">Patín</h1>
          <div class="subheading mb-5">Centro de Educacion Fisica (C.E.F) Nº 59
          </div>
          <p class="lead mb-5">La institución educativa Centro de Educacion Fisica (C.E.F) Nº 59 ofrece servicios educativos en la modalidad de educación complementaria. La modalidad de Educación Complementaria da marco a la creación de los Centros Educativos Complementarios (CEC).</p>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5">Patín para niños y pre-adolescentes</h2>
          <p>El patinaje sobre ruedas es una disciplina deportiva de deslizamiento en la que los participantes hacen acrobacias, piruetas y otros ejercicios técnicos utilizando patines sobre ruedas. Requiere una buena preparación física y una gran capacidad de concentración.</p>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="my-auto">
          <h2 class="mb-5">Horarios</h2>
          <h3>Realiza la consulta</h3>
          @include('contact')
        </div>
      </section>

{{--       <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="fotos">
        <div class="my-auto">
          <img src="{{ asset('img/patin1.jpg') }}" alt="" class="img-thumbnail">
          <img src="{{ asset('img/patin2.jpg') }}" alt="" class="img-thumbnail">
          <img src="{{ asset('img/patin3.jpg') }}" alt="" class="img-thumbnail">
          <img src="{{ asset('img/patin4.jpg') }}" alt="" class="img-thumbnail">
        </div>
      </section> --}}
    </div>
    
@endsection