@extends('layouts.deportes')

@section('title','GYM')

@section('content')

{{-- @section('logo','img/iconos/pesas.png') --}}

@include('navdeportes')

@include('actividades.navbar')

    <div class="container-fluid p-0">
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <img class="rounded pull-right" src="img/iconos/pesas.png"  alt="">
          <h1 class="mb-0">Multi GYM</h1>
          <div class="subheading mb-5">Gustavo Sarroca</div>

          <p class="lead">Amor y vocación Profesional, simplicidad y continuo contacto con el socio forman parte de nuestro ADN.</p>

          <p class="lead">Es momento de recuperar valores pasados, el club Porteño marca un espacio de diseño único para cuidarte y sentirse bien, el mismo se encuentra ubicado en el Barrio de la Estación, lugar pintoresco y legendario por su historia en el crecimiento de la Ciudad de Bragado.</p>

          <h3>Cuidamos los detalles</h3>
          <p class="lead">Nos agrada hacerte sentir la calidez de nuestros espacios para que puedas saber lo importante que es para nosotros que nos elijas y por eso estamos atentos a cada una de las necesidades de nuestros socios.</p>

          <h3>Proba nuestros Sistema Multitrainer</h3>
          <p class="lead">Según las necesidades detectadas en nuestras entrevistas y de valoración funcional ponemos a tu disposición un equipo de entrenadores, los cuales son especialistas en cada una de las diferentes disciplinas que ofrecemos.</p>

          <p class="lead">¿TE IMAGINAS HACER GYM CON GUSTAVO, FUNCIONAL CON JOANA o TAEKWONDO recreativo  con TAMARA?</p>

          <p class="lead">¿POR QUÉ NO? ENTRENANDO CON ELLOS, CON UN PLAN DE ENTRENAMIENTO ESPECIAL, ÙNICO ACORDE A TUS NECESIDADES Y A TUS TIEMPOS.</p>

          <p class="lead">ES MOMENTO DE COMENZAR....ALGO NUEVO COMO DISTINTO EN UN LUGAR CON GENTE QUE ACOMPAÑARA TUS OBJETIVOS O SIMPLEMENTE DISFRUTAR DE UN TIEMPO PARA TI.</p>

        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5">Propuesta de nuestro GYM:</h2>
          <ul class="list-group">
            {{-- <a href="#" data-toggle="modal" data-target="#Modal1"> --}}

<li class="list-group-item">Entrenamiento  personalizado (acompañamiento en secciones de entrenamiento)</li>

<li class="list-group-item">Valoración de equipos Evaluación y testeo de cualidades físicas(baterías de test propuesto a entrenadores, atletas para valorar y controlar el rendimiento deportivo)</li>

<li class="list-group-item">Perfil antropométrico(valoración de la composición corporal morfológica dimensiones y proporcionalidad del atleta)</li>

<li class="list-group-item">Planificación pro-training (planificación seguimiento y acompañamiento para atletas exigentes orientados al máximo rendimiento deportivo).</li>

<li class="list-group-item">Planificación training (planificación del entrenamiento para atletas recreacionales que pretenden mejorar su rendimiento deportivo)</li>

<li class="list-group-item">Rehabilitación (rehabilitación de lecciones deportivas y de patologías)</li>

<li class="list-group-item">Sobrepeso (trabajos apuntados a favorecer el descenso de peso y la forma física)</li>

<li class="list-group-item">Adultos mayores (ideal para 3ª edad con trabajos de fortalecimiento y movilidad articular para mejorar la calidad de vida).</li>

          </ul>          
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="my-auto">
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="my-auto">
          <h2 class="mb-5">Horarios</h2>
          <h3>Realiza la consulta</h3>
          @include('contact')
          </table>
        </div>
      </section>
        </div>
      </section>
   </div>
    
@endsection
<div id="Modal1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
        <h4 class="modal-title">Pro-trancing</h4>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore voluptate praesentium laudantium accusantium. Necessitatibus corporis aliquid sapiente ad architecto nobis distinctio alias, ducimus aut, consequatur nulla animi excepturi eos iusto!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="Modal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
        <h4 class="modal-title">Trang</h4>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore voluptate praesentium laudantium accusantium. Necessitatibus corporis aliquid sapiente ad architecto nobis distinctio alias, ducimus aut, consequatur nulla animi excepturi eos iusto!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
