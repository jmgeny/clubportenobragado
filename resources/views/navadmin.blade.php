<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="{{ url('/') }}">Club Porteño</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      @guest
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Usuario
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ route('login') }}">Ingresar</a>
        {{-- <a class="dropdown-item" href="{{ route('register') }}">Registrar</a> --}}
      </div>
    </li>      
      @else
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Socios
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('member.index') }}">Listar</a>
        <a class="dropdown-item" href="{{route('member.create') }}">Crear</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Notas
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('nota.index') }}">Ver</a>
        <a class="dropdown-item" href="{{route('nota.create') }}">Nueva</a>
      </div>
    </li>  

    {{-- Conexion --}}
                                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
      @endguest 
    </ul>
  </div> 
</nav>