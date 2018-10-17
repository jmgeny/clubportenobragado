@extends('layouts.deportes')

@section('title','Adultos')

@section('content')

@section('logo','img/iconos/adultos.png')

@include('navdeportes')

@include('actividades.navbar')

    <div class="container-fluid p-0">
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Adultos</h1>
          <div class="subheading mb-5">Marianela Sola
          </div>
          <p class="lead mb-5">Soñar, aprender, tener proyectos, forman parte de todas las etapas de nuestra vida. Por eso, llevamos adelante distintas iniciativas para garantizar los derechos de las personas mayores, fortalecer su autonomía y promover bienestar físico y mental.</p>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5">Adultos Mayores</h2>
          <p>Los juegos son una de esas actividades que os recomendamos. Es bien sabido lo necesarios que son para todas las etapas de la vida, pero en la tercera edad son especialmente recomendables por sus grandes beneficios. Fomentan la sociabilidad, activan la mente, es una gran fuente de entretenimiento y diversión, mejora la positividad y, al mismo tiempo, aumenta la capacidad física.</p>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="my-auto">
          <h2 class="mb-5">Horarios</h2>
          <table class="table table-striped">
            <thead class="thead-dark">
              <th>Lunes</th>
              <th>Martes</th>
              <th>Miércoles</th>
              <th>Jueves</th>
              <th>Viernes</th>
              <th>Edad</th>
            </thead>
            <tbody>
              <tr>
                <td>16 a 17</td>
                <td></td>
                <td>16 a 17</td>
                <td></td>
                <td></td>
                <td>Adultos</td>                                            
            </tbody>
          </table>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="fotos">
        <div class="my-auto">
          <h2 class="mb-5">Fotos</h2>
          <img src="{{ asset('img/adultos1.jpg') }}" alt="" class="img-thumbnail">
          <img src="{{ asset('img/adultos2.jpg') }}" alt="" class="img-thumbnail">
          <img src="{{ asset('img/adultos3.jpg') }}" alt="" class="img-thumbnail">
          <img src="{{ asset('img/adultos4.jpg') }}" alt="" class="img-thumbnail">
        </div>
      </section>
    </div>
    
@endsection