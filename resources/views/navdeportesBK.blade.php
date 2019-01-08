<nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="{{ url('/') }}">Club Porteño</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">

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