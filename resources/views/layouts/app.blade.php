<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('favicon (2).ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon (2).ico') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    <script src="{{asset('js/input-mask.js')}}"></script> 
    <script src="{{asset('js/limpiarModal.js')}}"></script> 
    <link rel="stylesheet" href="{{asset('css/show-password-toggle.min.css')}}">
    <title>@yield('titulo') | Asociación de Fútbol de Lisiados</title>
  </head>
  <body>
    <!--Main Navigation-->
    <header>
      <!-- Sidebar -->
      <nav id="sidebarMenu" class="collapse d-lg-block navbar-dark bg-dark sidebar collapse ">
        <div class="position-sticky">
          <div class="list-group list-group-flush mx-3 mt-4 bg-dark">
            <li class="list-group-item list-group-item-action py-2 ripple bg-dark text-light" >
              <i class="fa-solid fa-trophy text-warning me-3"></i><span><b>{{$torneo->nombre}}</b></span> 
            </li>
            <a href="{{route('home', $torneo)}}" class="list-group-item list-group-item-action py-2 ripple bg-dark text-light {{ Request::is('Inicio') ? 'active' : '' }}" >
              <i class="fas fa-house fa-fw me-3"></i><span>Inicio</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-2 ripple bg-dark text-light" aria-current="true">
              <i class="fas fa-people-group fa-fw me-3"></i><span>Equipos</span>
            </a>
            <a href="{{route('jornadas.index', $torneo)}}" class="list-group-item list-group-item-action py-2 ripple bg-dark text-light">
              <i class="fas fa-calendar-days fa-fw me-3"></i><span>Jornadas</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-2 ripple bg-dark text-light">
              <i class="fas fa-chart-line fa-fw me-3"></i><span>Clasificación</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-2 ripple bg-dark text-light">
              <i class="fas fa-chart-pie fa-fw me-3"></i><span>Estadísticas</span>
            </a>
            <a href="{{route('torneo.index')}}" class="list-group-item list-group-item-action py-2 ripple bg-dark text-light">
              <i class="fa-sharp fa-solid fa-chevron-left me-3"></i><span>Mis torneos</span>
            </a>
          </div>
        </div>
      </nav>
      <!-- Sidebar -->

      <!-- Navbar -->
      <nav id="main-navbar" class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm" style="background-color: #126E51;">
        <!-- Container wrapper -->
        <div class="container-fluid">
          <!-- Toggle button -->
          <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#sidebarMenu"
                  aria-controls="sidebarMenu"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                  >
            <i class="navbar-toggler-icon"></i>
          </button>

          <!-- Brand -->
          <a class="navbar-brand" href="#">
            <!-- <img src="{{ asset('img/balon-fut.png') }}" width="15" alt="" loading="lazy"/> -->
            <i class="fa-solid fa-futbol"></i><span class="navbar-brand mb-0 h1">&nbsp;Asociación de Futbol de Lisiados</span>
          </a>
          

          <!-- Right links -->
          <ul class="navbar-nav ms-auto d-flex flex-row">
            <!-- Avatar -->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                >
                <span class="text-light">Bienvenido/a, </span> <b class="text-light">&nbsp{{ auth()->user()->organizador->nombre }}</b>
                
                @php($user = auth()->user())
              </a>
              <ul
                  class="dropdown-menu dropdown-menu-end"
                  aria-labelledby="navbarDropdownMenuLink"
                  >
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#configModal{{$user->organizador->id}}">Configuración</a></li>
                <li><a class="dropdown-item" href="/logout">Cerrar sesión</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- Container wrapper -->
      </nav>
      <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5 pt-2">
      <div class="container pt-4">
        <!--Main layout-->
        @yield('content')
      </div>
    </main>
    @include('layouts.modal.configModal')
  </body>
  
</html>