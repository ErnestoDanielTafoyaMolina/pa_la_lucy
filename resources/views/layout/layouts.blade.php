<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <script src="{{asset('js/mdb.min.js')}}"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
    



</head>
<body>
    <header>
        <!-- Navbar -->
        {{-- <nav class="navbar navbar-expand-lg navbar-light bg-white">
          <div class="container-fluid">
            <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarExample01"
              aria-controls="navbarExample01"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" aria-current="page" href="http://127.0.0.1:8000/">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://127.0.0.1:8000/login">Inicio de sesion</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://127.0.0.1:8000/formulario">Crear cuenta</a>
                </li>

              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar --> --}}

        <nav class="navbar navbar-expand-lg bg-ligth" >
          <div class="d-flex justify-content-center align-items-center">
            <button
              class="navbar-toggler bg-light m-3"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarExample01"
              aria-controls="navbarExample01"
              aria-expanded="false"
              aria-label="Toggle navigation"
            ><i class="bi bi-list"></i></button>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
 
                @guest
                <li class="nav-item active">
                  <a class="nav-link text-white fw-bold" aria-current="page" href="http://127.0.0.1:8000/">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white fw-bold" aria-current="page" href="http://127.0.0.1:8000/login">Inicio de sesión</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white fw-bold" aria-current="page" href="http://127.0.0.1:8000/formulario">Crear cuenta</a>
                </li>
                @endguest
                
                @auth
                  <div class="d-flex align-items-center m-3">
                    <p>
                      <h3 class="text-dark">{{auth()->user()->username}}</h3>
                    </p>
                    <form action="{{route('logout')}}" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-link px-3 m-2">
                        Cerrar sesión
                      </button>
                    </form>
                  </div>

                  <a type="button" href="{{route('post.create')}}" class="btn btn-link m-4 p-2">
                    <i class="fas fas-camera-retro"></i>
                    Crear post
                  </a>
                @endauth
              </ul>
            </div>
          </div>
        </nav>

        <!-- Background image -->
        <div
          class="p-5 text-center bg-image"
          style="
            background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
            height: 400px;
          "
        >
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white">
                <h1 class="mb-3">Heading</h1>
                <h4 class="mb-3">Subheading</h4>
                <a class="btn btn-outline-light btn-lg" href="#!" role="button"
                >Call to action</a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- Background image -->
      </header>

    <div class="container mt-5 mb-5">
    <h1>@yield('titulo')</h1>
    <hr class="hr"> @yield('contenido')</div>

    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
      </footer>

      {{-- @auth
          <div class="d-flex align-items-center">
            <a type="button" href="{{route(post.create) }}" class="btn btn-link px-3 me-2">
                <i class="fas fa-camera-retro"></i> Crear post
            </a>
            <p class="me-5 px-3 me-2">
                <h3 class="text-while-50">{{ auth()->username }}</h3>
            </p>
            <form action="{{ route('logout') }}" method="post">
                @csrf
            <button type="submit" class="btn btn-link px-3 me -me-2">
                Cerrar sesion
            </button>

            </form>
          </div>
      @endauth --}}

</body>
</html>
