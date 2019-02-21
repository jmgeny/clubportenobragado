@extends('layouts.deportes')

@section('title','Patin')

@section('content')

@include('navdeportes')

@include('actividades.navbar')

    <div class="container-fluid p-0">
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <img class="rounded pull-right" src="img/iconos/patin.png"  alt="">
          <h1 class="mb-0">Patín C.E.F 59</h1>
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

       <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Natalia Patín</h1>
          <div class="subheading mb-5">Natalia Araya</div>
          <p class="lead mb-5">La enseñanza de patín competitivo y recreativo. Te preparamos para la alta competencia o para el simple placer de patinar.</p>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5">Modalidad Libre</h2>
          <p>La competición de patinaje libre consiste en un programa corto y un programa largo, que contribuyen un 25 % y un 75 % respectivamente a la puntuación final. En el programa corto se deben realizar seis elementos obligatorios: saltos —simples, dobles o triples, según la categoría—, giros —piruetas de múltiples rotaciones en diferentes posturas y sobre diferentes ruedas— y trabajo de pies. Estos elementos solo se pueden intentar una vez. En el programa largo el número máximo de elementos de un tipo no está regulado siempre y cuando no se repitan. Se debe incluir un cierto número de giros y saltos; estos pueden ser simples, si solo se efectúa un salto, o se usa un solo pie y posición en los giros o combinados, enlazando múltiples saltos o, en el caso de los giros, con cambios de pie y/o posición. También es obligatorio efectuar dos secuencias de pasos. El programa recibe dos notas: El mérito técnico, valorando la variedad y dificultad de los elementos, y la impresión artística, que puntúa la ejecución armónica de los elementos reflejando en la interpretación el carácter de la música.4</p>
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