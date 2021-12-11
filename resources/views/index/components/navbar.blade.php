<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
  <div class="container">
    <a class="navbar-brand" href="index.html"><img src="img/logo1.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{url('inicio')}}">Home
          </a>

        </li>

        <li class="nav-item  @@about">
          <a class="nav-link" href="{{url('sesion-productos')}}">Productos</a>
        </li>
        <li class="nav-item @@contact">
          <a class="nav-link" href="{{url('contactos')}}">Contáctenos</a>
        </li>

        <li class="nav-item dropdown @@pages">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Iniciar
            <span><i class="ti-angle-down"></i></span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('login')}}">Iniciar Sesión</a></li>
            <li><a class="dropdown-item" href="{{url('register')}}">Registrarse</a></li>
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>