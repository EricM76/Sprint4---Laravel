<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SocialTruek') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/fontawesome.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/solid.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/posteo.css">
    <link rel="stylesheet" href="/css/posteo2.css">
    <link rel="stylesheet" href="/css/imagenEdit.css">
    <link rel="stylesheet" href="/css/uploadImagen.css">
    <link rel="stylesheet" href="/css/mensajes.css">
</head>
<body style="background-color:lavender">

    <div id="app">
        <nav class="menu  navbar navbar-expand-md navbar-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <img class="img-fluid" src="/images/logo-sm.png" alt="" width="100px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="row collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->



                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto mr-2 align-items-end">
                        <!-- Authentication Links -->
                        @guest
                            <!-- <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('login') }}"><button type="button" class="btn btn-outline-light">{{ __('Inicar Sesion') }}</button></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('register') }}"><button type="button" class="btn btn-outline-light">{{ __('Registrase') }}</button></a>
                                </li>
                            @endif -->
                        @else
                        <form class="form-horizontal" action="/home" method="post">
                          {{csrf_field()}}
                            <div class="form-group mr-3">
                            <input class="form-control-sm" type="text" name="busca">
                            <button class="btn-sm btn-danger" type="submit" name="button">Buscar</button>
                            </div>
                        </form>
                        <ul class="nav my-2">
                            <li class="nav-item px-1">
                            <a class="nav-link active text-light" href={{'/home'}}><i class="fas fa-home mr-1"></i>Inicio</a>
                            </li>

                            <li class="nav-item px-1">
                                <a class="nav-link text-light" href="#"><i class="fas fa-star mr-1"></i>Favoritos</a>
                            </li>

                            <li class="nav-item px-1 dropdown">
                                <a class="nav-link text-light dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-clipboard mr-1"></i>Categorias</a>
                                <div class="dropdown-menu">

                                    @foreach ($categorias as $categoria)
                                <a class="dropdown-item" href="/detalleCategoria/{{$categoria['id']}}">{{$categoria->name}}</a>
                                    @endforeach

                                {{-- <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a> --}}
                                </div>
                            </li>

                            <li class="nav-item px-1">
                                <a class="nav-link text-light" href="{{('/publicar')}}"><i class="fas fa-bullhorn mr-1"></i>Publicar</a>
                            </li>
                        </ul>


                            <li class="nav-item dropdown m-2">


                                <a id="navbarDropdown" class="nav-link text-light dropdown-toggle m-1" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="display:inline"><img src="/storage/images/avatar/{{Auth::user()->profile}}" alt="" width="50px">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="/cuenta?id=nav-miPerfil-tab">
                                       {{ __('Mis Datos') }}
                                    </a>
                                    <a class="dropdown-item" href="/cuenta?id=nav-profile-tab">
                                        {{ __('Mis Productos') }}
                                    </a>

                                    <a class="dropdown-item" href="/cuenta?id=nav-misPropuestas-tab">
                                        {{ __('Mis Propuestas') }}
                                    </a>

                                    <a class="dropdown-item" href="/cuenta?id=nav-contact-tab">
                                        {{ __('Mensajes') }}
                                    </a>

                                    @if (Auth::user()->rol=='admin')
                                    <hr>
                                    <a class="dropdown-item text-danger" href="/admin/home">
                                        {{ __('Administración') }}
                                    </a>
                                    @endif
                                    <hr>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
        <main id="main">
            @yield('content')
        </main>

    @yield('js')
</body>
</html>
