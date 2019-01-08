    <nav class="navbar navbar-expand-lg navbar-dark bg-navbar" id="sideNav">
      {{-- <a class="navbar-brand js-scroll-trigger" href="#page-top"> --}}
        {{-- <span class="d-block d-lg-none">Funcional</span> --}}
        <a href="{{ url('/') }}" class="navbar-brand">
          <img src="img/logoPorteno.png" alt="porteno" width="100%">
        </a>
{{--         <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src= @yield('logo') alt="">
        </span> --}}
      {{-- </a> --}}
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
{{--         <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests">Actividad</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#awards">Horarios</a>
          </li>
          <li class="nav-item">
            <a href="https://www.facebook.com/pg/club.porteno.bragado/photos/?tab=albums" target="new" class="nav-link js-scroll-trigger">Fotos</a>
          </li>
        </ul> --}}
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('patin') }}">Patín</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('funcional') }}">Funcional</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('tela') }}">Acrotela</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('futsal') }}">Futsal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('adultos') }}">Adultos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('especial') }}">Adaptado</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('gym') }}">GYM</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('taekwondo') }}">Taekwondo</a>
        </li>        
        <li class="nav-item">
          <a class="nav-link" href="{{ url('eventos') }}">Sociales</a>
        </li>
      </ul>        
      </div>
    </nav>