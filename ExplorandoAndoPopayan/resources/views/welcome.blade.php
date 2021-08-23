@extends('layouts.app')
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
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="ext/aos.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cormorant+Garamod" rel="stylesheet">
        <link rel="stylesheet" href="img/css/fontello.css">
        <link rel="stylesheet" href="ext/bootstrap/css/bootstrap.min.css">
        <link  rel="stylesheet" type="text/css" href="Assets/Style.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/keyframes.css">
        <link rel="stylesheet" href="css/banner.css">
        <link rel="stylesheet" href="css/style.index.css">
        <link rel="icon" href="img/logo.jpg">
        <link  rel="stylesheet" type="text/css" href="slider/stylos.css" />

        <title>ExplorandoAndoPopayán</title>

</head>
<body>
</br>
</br>
<section>
        <div class="ewk_cont_banner">
            <div class="ewk_sobra">
                <h1 style="color: rgb(253, 253, 253);">Explorando Ando Popayán</h1>
                <hr/>
                <p>Conoce y disfruta en compañia de tu familia</p>
            </div>
        </div>
        </section>
    <section>
        <div class="container">
            <div class="row ewk_cont_sec_1">
                <div class="col-md-9">
                    <h2><b>Explorando Ando Popayán</b></h2>
                    <p><i>La mejor opcion para hacer caminatas y vivir experiecias unicas</i></p>
                    <hr/>
                    <p>“Antes de actuar, escucha. Antes de reaccionar, piensa. Antes de gastar, gana. Antes de criticar, espera. Antes de rezar, perdona. Antes de rendirte, inténtalo.”</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Presentacion</h2>
                    <p>Este aplicativo web va enfocado para todas aquellas personas que les gusta realizar caminatas, y que les guste descubrir esos rincones ocultos de nuestra ciudad de popayan.</p>
                    <br/>
                    <p>Se mostrara las rutas y fotos de estos hermosos lugares</p>

                    <a target="_black" href="https://www.linkedin.com/login/es"><i class="icon-linkedin"></i></a>
                    <a target="_black" href="https://twitter.com/iniciarsesion"><i class="icon-twitter"></i></a>
                    <a target="_black" href="https://web.whatsapp.com/"><i style="color: green;" class="icon-whatsapp"></i></a>
                    <a target="_black" href="https://www.youtube.com/watch?v=-C28PemdUGI"><i style="color:red;" class="icon-youtube-play"></i></a>
                    <a target="_black" href="https://www.facebook.com/"><i style="color: rgb(17, 17, 143);" class="icon-facebook-official"></i></a>

                </div>
                <div class="col-md-6">
                    <iframe width="640" height="360" src="https://www.youtube.com/embed/kw7Do1F9UdA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </br>
</br>
    </section>

    <section>
        <div class="ewk_cont_banner_sec_3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <h2>Explora Y sé feliz</h2>
                        <p>“enamórate de lugares en los que nunca has estado y de gente que nunca has conocido”</p>
                        <p>“Hay demasiadas aventuras ahí afuera esperando a ser vividas.”</p><br>
                        <p>“Que no te lo cuenten ven y disfruta t mismo.”</p>
                        <p>“Tenemos una ciudad que EXPLORAR nada que perder”</p>
                        <p>“Cada paisaje es una nueva aventura.”</p>
                    </br>
                        <p><i>"CADA PUNTO MARCADO EN EL MAPA ES SIMBOLO DE UNA AVENTURA MAS"</i></p>
                    </div>
                    <div class="col-md-8 ewk_cont_img  text-center">
                        <img src="img/img38.jpeg" class="img-fluid" alt="Popayan Cauca">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <hr/>
                    <h2>Lugares</h2>
                    <p>Todo Esto Lo Encuentras En Explorando Ando Popayán</p>
                    <hr/>
                </div>
            </div>
            <div class="slider"> 

            <span class="izquierda"> &#10094; </span>
            <span class="derecha">&#10095; </span>
            <ul>
                <li> <img src="slider/img/img1.jpeg"/></li>
                <li> <img src="slider/img/img2.jpeg"/></li>
                <li> <img src="slider/img/img4.jpeg"/></li>
                <li> <img src="slider/img/img6.jpeg"/></li>
                <li> <img src="slider/img/img7.jpeg"/></li>
                <li> <img src="slider/img/img8.jpeg"/></li>
                <li> <img src="slider/img/img9.jpeg"/></li>
                <li> <img src="slider/img/img10.jpeg"/></li>
                <li> <img src="slider/img/img11.jpeg"/></li>
                <li> <img src="slider/img/img2.jpeg"/></li>
                <li> <img src="slider/img/img13.jpeg"/></li>
                <li> <img src="slider/img/img14.jpeg"/></li>
                <li> <img src="slider/img/img15.jpeg"/></li>

               
            </ul>
        </div>
    </section>
            <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <hr/>
                    <h2><b>Presentacion de nuestros eventos</b></h2>
                    <p>Popayán Centro Historico De Nuestro Departamento Del Cauca</p>
                    <hr/>
                </div>
            </div>
                    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        
 <!--INICIO--->
<div class="col-lg-12" >
    <div class="text-center">
        <div class="row justify-content-md-center">
            @foreach ($informacion as $info)
            <div class="card-body bg-info col-md-3 mr-5" >
            <h5 class="card-title">{{$info->nombre}}</h5>
                <div class="text-center">
                <ul class="list-item">            
                    <li class="list-group-item">Fecha: {{$info->fecha}}</li>
                    <li class="list-group-item">Hora: {{$info->hora}}</li>
                    <li class="list-group-item">Encuentro: {{$info->punto_encuentro}}</li>
                </ul> 
                    <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="1estrella"></span>
                    <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="2estrella"></span>
                    <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="3estrella"></span>
                    <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="4estrella"></span>
                    <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="5estrella"></span>
                    <form action="{{ route('welcome.store') }}" method="POST">
                        @csrf
                        <div class="text-center">
                            <div class="form-group">
                                <input type="hidden" name="identificador" value="{{$info->id}}">
                                <strong>Comentar</strong>
                                <input type="text" name="descripcion" class="form-control">
                                <br>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </form> 
                </div> 
            </div>
            @endforeach             
 
        </div>
    </div> 
</div>

</div>
    <footer>
        <div class="ewk_cont_footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3">
                        <h2>Explorando Ando Popayán</h2>
                        <p>La mejor opcion para explorar nuestra ciudad</p>
                    </div>
                    <div class="col-md-3">
                        <h2>Categoria</h2>
                        <a href="#">Inicio</a>
                       
                        <a href="#">Siguenos</a>
                       
                        <a href="#">Proyecciones</a>
                       
                        <a href="#">Escribenos</a>
                    </div>
                    <div class="col-md-3">
                        <h2>Recomendado</h2>
                        <a href="#">
                            <p>Realiza tus caminatas con experiencias unicas en explorando ando popayan</p>
                           
                        </a>
                        <hr/>
                        <a href="#">
                            <p>Camina lugares unicos</p>
                            
                        </a>
                    </div>
                    <div class="col-md-3 ewk_cont_img_footer">
                        <img src="img/01.jpg" class="img-fluid" alt="Popayan">
                        <h3>Explorando Ando Popayán</h3>
                        <p>--------------------</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="ext/bootstrap/js/jquery.js"></script>
    <script src="ext/bootstrap/js/bootstrap.min.js"></script>
    <script src="ext/aos.js"></script>
    <script src="js/index.js"></script>
</body>  
</body>

</html>