@extends('layouts.deportes')

@section('title','Futsal')

@section('content')

@section('logo','img/iconos/futsal.png')

@include('navdeportes')

@include('actividades.navbar')

    <div class="container-fluid p-0">
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Futsal</h1>
          <div class="subheading mb-5">Fransisco Morales
          </div>
          <p class="lead mb-5">De todos es bien sabido, que el deporte en todas sus variantes es bueno para nuestros pequeños. Queremos lo mejor para ellos, y una manera de fomentar su desarrollo físico, su coordinación, capacidad de aprendizaje entre otras es el Futsal.</p>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5">Futsal para niños</h2>
          <p class="mb-2">Practicar Futsal les otorgará una mayor capacidad de Socialización, si tu hijo es algo tímido, gracias a los deportes de equipo logrará mayor soltura en sus relaciones personales.</p>
          <p class="mb-2">El trabajo en equipo y pensar en el beneficio común es un aspecto fundamental que van a adquirir practicando un deporte de equipo. Lograremos así una mejor capacidad de Trabajo en Grupo, una característica muy cotizada en los tiempos que estamos.</p>
          <p class="mb-2">Aprenderá a tener una Tolerancia a la Frustración, pues no en todos los partidos ganarán, y poco a poco el niño será capaz de asimilar mejor las derrotas de su equipo.</p>
          <p class="mb-2">El futsal es un deporte repleto de normas, así que los niños aprenderán poco a poco a Respetar las Normas, y en algunos de ellos incluso a cumplirlas, pudiendo extrapolar este beneficio a nuestra vida cotidiana.</p>
          <p class="mb-2">La Humildad, un rasgo de los más importantes. Lo habitual es que el entrenador y los padres les hagan ver a sus hijos que no por ganar es el mejor, pues “hoy has ganado, pero quizá mañana puedas perder” por lo que si se aplica un buen trabajo en este ámbito el niño logrará obtener el rasgo de la humildad también, su vida cotidiana.</p>
          <p class="mb-2">Aunque pueda parecer una contradicción al rasgo anterior, el deporte en equipo como el futsal también mejorará su Autoestima. Pues cada miembro del equipo es fundamental, por lo que el niño se sentirá parte de un grupo donde su aportación es importante, lo cual hará de él una persona con mejor autoestima. No se debe fomentar la autoestima basándonos en las victorias o en los goles que haya metido, sino en su aportación al equipo.</p>
          <p class="mb-2">Hacer deporte logra un consumo de energía física, y con ello lograremos que el niño Mejore su Sueño.</p>
          <p class="mb-2">Aprendizaje de la Responsabilidad, si nuestro hijo participa en el conjunto de un deporte en equipo adquiere unas obligaciones para con su equipo, su entrenador, sus compañeros… La rutina de los entrenamientos, los partidos, la equipación etc logrará mejorar y potenciar el rasgo de Responsabilidad de nuestros más pequeños.</p>
          <p class="mb-2">Deportes de equipo como el Futsal requieren de una implicación por parte de los padres que les acompañarán a partidos etc, lo cual hará que la relación entre padres e hijos mejore, ya que este tipo de actividades en familia Estrechan los Lazos con nuestros pequeños.</p>
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
                <td></td>
                <td>17 a |18</td>
                <td></td>
                <td>17 a |18</td>
                <td></td>
                <td>Niños</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="fotos">
        <div class="my-auto">
          <img src="{{ asset('img/futsal1.jpg') }}" alt="" class="img-thumbnail">
          <img src="{{ asset('img/futsal2.jpg') }}" alt="" class="img-thumbnail">
          <img src="{{ asset('img/futsal3.jpg') }}" alt="" class="img-thumbnail">
          <img src="{{ asset('img/futsal4.jpg') }}" alt="" class="img-thumbnail">
        </div>
      </section>
    </div>
    
@endsection