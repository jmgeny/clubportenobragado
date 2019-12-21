    <section class="content-section bg-primary text-white text-center" id="actividades">
      <div class="container">
        <div class="content-section-heading">
          <h2 class="mb-5">¿Que puedo hacer en el club?</h2>
        </div>
        <div class="row">

           <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <a href="#" data-toggle="modal" data-target="#patinModal">
              <span class="service-icon rounded-circle mx-auto mb-3">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('img/iconos/patin.png') }}" alt="">
              </span>
            </a>
            <h4>
              <strong>Patin</strong>
            </h4>
          </div>

          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <a href="#" data-toggle="modal" data-target="#gymModal">
              <span class="service-icon rounded-circle mx-auto mb-3">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('img/iconos/pesas.png') }}" alt="">
              </span>
            </a>
            <h4>
              <strong>GYM</strong>
            </h4>
          </div>                     


          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <a href="#" data-toggle="modal" data-target="#funcionalModal">
              <span class="service-icon rounded-circle mx-auto mb-3">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('img/iconos/funcional.png') }}" alt="">
              </span>
            </a>
            <h4>
              <strong>Funcional</strong>
            </h4>
          </div>                              

{{--           <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <a href="#" data-toggle="modal" data-target="#taekwondoModal">
              <span class="service-icon rounded-circle mx-auto mb-3">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('img/iconos/taekwondo.png') }}" alt="">
              </span>
            </a>
            <h4>
              <strong>Taekwondo</strong>
            </h4>
          </div> --}}

          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <a href="#" data-toggle="modal" data-target="#futsalModal">
              <span class="service-icon rounded-circle mx-auto mb-3">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('img/iconos/futsal.png') }}" alt="">
              </span>
            </a>
            <h4>
              <strong>Futsal</strong>
            </h4>
          </div>          

          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <a href="#" data-toggle="modal" data-target="#futbolModal">
              <span class="service-icon rounded-circle mx-auto mb-3">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('img/iconos/futsal.png') }}" alt="">
              </span>
            </a>
            <h4>
              <strong>Futbol</strong>
            </h4>
          </div>                    

{{--
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <a href="{{ url('tela') }}">
              <span class="service-icon rounded-circle mx-auto mb-3">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/iconos/tela.png" alt="">
              </span>
            </a>
            <h4>
              <strong>Tela</strong>
            </h4>
          </div>                              

                              

          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <a href="{{ url('adultos') }}">
              <span class="service-icon rounded-circle mx-auto mb-3">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/iconos/adultos.png" alt="">
              </span>
            </a>
            <h4>
              <strong>Adultos</strong>
            </h4>
          </div> 

          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <a href="{{ url('especial') }}">
              <span class="service-icon rounded-circle mx-auto mb-3">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/iconos/adaptado.png" alt="">
              </span>
            </a>
            <h4>
              <strong>Adaptado</strong>
            </h4>
          </div> 

           
          
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <a href="{{ url('eventos') }}">
              <span class="service-icon rounded-circle mx-auto mb-3">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/iconos/eventos.png" alt="">
              </span>
            </a>
            <h4>
              <strong>Sociales</strong>
            </h4>
          </div>            --}}

        </div>
      </div>
    </section>

@include('actividades.patin')
@include('actividades.gym')
@include('actividades.funcional')
@include('actividades.taekwondo')
@include('actividades.futsal')
@include('actividades.futbol')