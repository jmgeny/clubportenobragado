@extends('layouts.deportes')

@section('title','Taekwondo')

@section('content')

@include('navdeportes')

@include('actividades.navbar')

    <div class="container-fluid p-0">
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <img class="rounded pull-right" src="img/iconos/taekwondo.png"  alt="">
          <h1 class="mb-0">Taekwon-DO</h1>
          <div class="subheading mb-5">Tamara Senise
          </div>
          <p class="lead mb-5">El taekwondo es un arte marcial y deporte de contacto moderno, el cual fue dado a conocer como "Taekwon-Do" en el año 1955 por El General Choi, siendo convertido en deporte olímpico de combate desde el año de 1988, en los JJ. OO. de Seúl, Corea. donde fue presentado como deporte de exhibición hasta su reconocimiento deportivo olímpico en los Juegos Olímpicos de Sidney 2000. El estilo promovido por la WTF (Taekwondo Mundial) es reconocido como deporte olímpico.</p>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5">Taekwondo WTF</h2>
          <p>Los beneficios de la práctica continua del Taekwondo son innumerables. Muchos estudios han revelado que las personas que se ejercitan regularmente en una disciplina deportiva, a lo largo de su vida, tienen menos riesgos de obesidad, desarrollo de enfermedades crónicas, drogadicción, entre otras condiciones que afectan la salud física, mental y emocional. Las investigaciones realizadas en adolescentes, mostraron que la práctica continua del taekwondo como arte marcial, ayuda a mejorar la salud en general, y condiciona de forma apropiada los reflejos, mejorando el tiempo de reacción.</p>
          <p class="mb-0">Como en otras artes marciales tradicionales, en el Taekwondo, los grados son representados por las llamados cinturones de colores, (otorgadas no solo por la destreza física, sino por su crecimiento personal), los significados de estas se basan en los ciclos de la naturaleza, en definitiva: el entrenamiento en artes marciales es un proceso continuo de maduración emocional, enmarcado dentro del respeto, la constancia y la disciplina.</p>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="my-auto">
          <h3>Realiza la consulta</h3>
          @include('contact')
        </div>
      </section>

   </div>
    
@endsection