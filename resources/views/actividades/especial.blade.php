@extends('layouts.deportes')

@section('title','Especial')

@section('content')

@section('logo','img/iconos/adaptado.png')

@include('navdeportes')

@include('actividades.navbar')

    <div class="container-fluid p-0">
      <section class="resume-section p-7 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h2 class="mb-0">Escuela de Iniciación Deportiva Adaptada</h2>
          <div class="subheading mb-5">Adrana Girollet y Gullermina Ossola
            {{-- <a href="mailto:name@email.com">name@email.com</a> --}}
          </div>
          <p class="lead mb-5">Es comúnmente aceptado por la sociedad el valor esencial que el deporte representa en el desarrollo integral de la persona, tanto en el aspecto físico como en el psíquico o social, posibilitando un equilibrio entre estos tres aspectos de la personalidad del ser humano. En el caso de las personas afectadas por algún tipo de discapacidad, este valor y sus efectos son aún más claros y evidentes.</p>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5">Iniciación al Deporte Adaptado</h2>
          <p>El juego es el mejor estimulo para la iniciación en el deporte, es una actividad tan importante como seria. Cuando los niños juegan ponen en marcha todas sus capacidades de aprendizaje: crean, innovan, exploran… , es parte integral de la vida, forma las bases para las relaciones humanas, la creatividad y el desarrollo de la destreza y la actitud deportiva.</p>
          <p class="mb-0"> Pero por sobre todo , un niño es FELIZ CUANDO JUEGA , y ese es nuestro fin Trabajamos en la integración y la equidad. </p>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="my-auto">
          <h2 class="mb-5">Horarios</h2>
          <h3>Realiza la consulta</h3>
          @include('contact')
    </div>
    
@endsection