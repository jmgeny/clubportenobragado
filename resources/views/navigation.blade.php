    <a class="menu-toggle rounded" href="#">
      <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="#page-top">Club Porteño</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#page-top">Inicio</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#actividades">Actividades</a>
        </li>
{{--         <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#noticias">Noticias</a>
        </li> --}}
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#about">El club</a>
        </li>
        @auth
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="{{ route('admin') }}">Administrar</a>
        </li>
        @endauth
{{--         <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#contact">Contacto</a>
        </li> --}}
      </ul>
    </nav>