@extends('layouts.deportes')

@section('title','Funcional')

@section('content')

@section('logo','img/iconos/funcional.png')

@include('navdeportes')

@include('actividades.navbar')

    <div class="container-fluid p-0">
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Funcional</h1>
          <div class="subheading mb-5">Joana Hernandez</div>
          <p class="lead mb-5">El concepto de entrenamiento funcional (functional training) ha recibido mucha atención en los últimos años. Algunos deportistas de élite y algunos famosos que hacen deporte pregonan sus magníficos resultados. Pero por otro lado, aunque muchos entrenadores personales o preparadores físicos se publicitan como expertos en entrenamiento funcional (functional trainers), en ocasiones pasan por alto los puntos clave en la aplicación efectiva de esta metodología que ya tiene bastantes años de existencia.</p>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto"> <br>
          <h3 class="mb-5">El entrenamiento funcional es un quemagrasas.</h3>
          <p> Facilita la metabolización de grasa Es cierto que la alimentación basada en una dieta sana y equilibrada es clave para la pérdida de peso, pero si le añades la práctica del entrenamiento funcional verás cómo se potencia el efecto y es que el entrenamiento funcional no solo te ayuda a quemar grasa, también te apoya a mejorar la fuerza de tus músculos, así como la resistencia y acelera el metabolismo.</p>
          <h3 class="mb-5">El entrenamiento funcional mejora la postura de tu cuerpo</h3>
          <p class="mb-0">El estrés, un ritmo de vida acelerado e incorrectas posturas pueden derivar en desequilibrio muscular, por ello sumar el ejercicio funcional a tu rutina favorece la corrección de las malas posturas y los desequilibrios de grupos musculares.</p><br>
          <h3 class="mb-5">Ganas estabilidad y fortaleces el core</h3>
          <p class="mb-0">En cada sesión se trabaja la flexibilidad, equilibrio y fuerza de los grandes grupos y cadenas musculares. Esta combinación otorga a tu cuerpo una estabilidad completa favoreciendo el fortalecimiento y la salud. Por supuesto, como se trabajan los músculos estabilizadores también se fortalece la zona media del cuerpo. El core es la base de la estabilidad y el entrenamiento funcional se encarga de fortalecerlo. Evitarás lesiones y mejorarás tu rendimiento en cualquier actividad.</p>
          {{-- https://entrenamientofuncional.net/que-es-el-entrenamiento-funcional/ --}}
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
                <td>19 a 20</td>
                <td></td>
                <td>19 a 20</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>                                            
            </tbody>
          </table>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="fotos">
        <div class="my-auto">
          <img src="{{ asset('img/fotos.jpg') }}" alt="" class="img-thumbnail">
          <img src="{{ asset('img/fotos.jpg') }}" alt="" class="img-thumbnail">
          <img src="{{ asset('img/fotos.jpg') }}" alt="" class="img-thumbnail">
          <img src="{{ asset('img/fotos.jpg') }}" alt="" class="img-thumbnail">
        </div>
      </section>
    </div>
    
@endsection