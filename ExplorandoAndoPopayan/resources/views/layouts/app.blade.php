<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ExplorandoAndoPopayán</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">


        
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{route('welcome')}}">Explorando Ando Popayán</a>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
        <a class="nav-link" href="{{route('eventos.index')}}">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-soydelcauca" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Detalles
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown-explorandoandopopayan">     
          <a class="dropdown-item" href="{{route('rutas.index')}}">Rutas</a>
          <a class="dropdown-item" href="{{route('riesgos.index')}}">Riesgos</a>
          <a class="dropdown-item" href="{{route('galerias.index')}}">Galerias</a>
          <a class="dropdown-item" href="{{route('estaciones.index')}}">Estaciones</a>
        </div>
      </li> 
        </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesion') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>


                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesion') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>


<script>
  var contador;
  function calificar(item){
    console.log(item);
    contador=item.id[0];
    let nombre = item.id.substring(1);
    for(let i=0;i<5;i++){
      if(i<contador){
        document.getElementById((i+1)+nombre).style.color="orange";
      }else{
        document.getElementById((i+1)+nombre).style.color="black";
      }
    }
  }
  function Mensaje() {
    alert("Gracias por calificar nuestro canal usted nos dio"+contador+"estrellas");
  }
</script>



</html>
