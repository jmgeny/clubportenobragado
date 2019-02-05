@extends('layouts.deportes')

@section('title','Tela')

@section('content')

@include('navdeportes')

@include('actividades.navbar')

    <div class="container-fluid p-0">
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <img class="rounded pull-right" src="img/iconos/tela.png"  alt="">
          <h1 class="mb-0">Acrotela</h1>
          <div class="subheading mb-5">Joana Hernandez</div>
          <p class="lead mb-5">En los últimos años, la acrotela o acrobacia en tela se volvió muy popular en el pais y en el mundo. Se trata de una práctica circense de ejercicios aéreos, donde los artistas realizan movimientos coreográficos y acrobáticos suspendidos en una tela. Es una mezcla de danza y deporte que requiere de fuerza y flexibilidad.</p>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5">Los beneficios de la Acrobacia en Telas</h2>
          <p class="mb-2">Se adquiere gran fuerza y tonicidad en el abdomen, una zona central para sostener el propio peso del cuerpo en la altura y con las telas, con lo cual se reduce la cintura y se logra un vientre plano.</p>
          <p class="mb-2">Los brazos y piernas se vuelven flexibles y tonificados, pues son los que realizan la fuerza para trepar, sostener y armar las figuras en la altura.</p>
          <p class="mb-2">Los brazos y piernas se vuelven flexibles y tonificados, pues son los que realizan la fuerza para trepar, sostener y armar las figuras en la altura.</p>
          <p class="mb-2">La elongación y la resistencia física mejora notablemente con los meses de entrenamiento. Esto repercute en las alturas, pero también en la vida cotidiana. Se obtiene un cuerpo más ágil y fuerte, más coordinado, lo cual aporta un gran bienestar.</p>
          <p class="mb-0">La acrobacia aérea en tela además, mejora la coordinación, agilidad y expresión corporal, realiza un aporte al desarrollo de sensaciones de seguridad y confianza, fortalece la autoestima de la persona que se ve capaz de alcanzar logros cada vez más desafiantes, y se favorece la creatividad e incentivan el desarrollo de los sentidos.</p>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="my-auto">
          <h2 class="mb-5">Horarios</h2>
          <h3>Realiza la consulta</h3>
          @include('contact')
        </div>
      </section>
    </div>
    
@endsection