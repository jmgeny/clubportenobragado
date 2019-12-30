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
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#about">El club</a>
        </li>
        @auth
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="{{ route('admin') }}">Administrar</a>
        </li>
        <li class="sidebar-nav-item dropdown">
                                <a id="js-scroll-trigger navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color: #1d809f">
                                    <a class="js-scroll-trigger dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
          </li>
        @else
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="{{ route('login') }}">Ingresar</a>
        </li>
        @endauth
      </ul>
    </nav>