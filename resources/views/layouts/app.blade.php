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
</head>
<body>
    <div id="app ">

        <nav class="menu  navbar navbar-expand-md navbar-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="img-fluid" src="images/logo-sm.png" alt="" width="100px">
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
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('login') }}"><button type="button" class="btn btn-outline-light">{{ __('Inicar Sesion') }}</button></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('register') }}"><button type="button" class="btn btn-outline-light">{{ __('Registrase') }}</button></a>
                                </li>
                            @endif
                        @else
                        <form class="form-horizontal" action="">
                            <div class="form-group mr-3">
                            <label class="text-white" for="">Buscar</label>
                            <input class="form-control-sm" type="text">
                            </div>
                        </form>
                        <ul class="nav my-2">
                            <li class="nav-item pl-2">
                                <a class="nav-link active text-light" href="#"><i class="fas fa-home mr-1"></i>Inicio</a>
                            </li>

                            <li class="nav-item pl-2">
                                <a class="nav-link text-light" href="#"><i class="fas fa-heart mr-1"></i>Favoritos</a>
                            </li>

                            <li class="nav-item pl-2 dropdown">
                                <a class="nav-link text-light dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-map-signs mr-1"></i>Categorias</a>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>

                            <li class="nav-item pl-2">
                                <a class="nav-link text-light" href="{{('/publicar')}}"><i class="fas fa-bullhorn mr-1"></i>Postear</a>
                            </li>
                        </ul>


                            <li class="nav-item dropdown m-2">


                                <a id="navbarDropdown" class="nav-link text-light dropdown-toggle m-1" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="display:inline"><img src="images/unknown.png" alt="" width="50px">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>
                                    <a class="dropdown-item" href="">
                                       {{ __('Perfil') }}
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

        <main class="">
            @yield('content')
        </main>
    </div>
</body>
</html>
