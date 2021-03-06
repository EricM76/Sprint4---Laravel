<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/app.js" charset="utf-8"></script>
       <title>SocialTruek</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <!-- Styles -->
        <style>
            @font-face{
                font-family: Nunito;
                src: url(../fonts/Nunito-Regular.ttf);
            }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 80vh;
                margin: 0;
            }

            .full-height {
                height: 20vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: relative;
                right: 0px;
                top: 18px;
            }

            .content {
                margin-top: 15vh;
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 1vw;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .btn{
                padding: 5px 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class=" flex-center">
                <div class="col-sm-12">
                    <img class="img-fluid" src="images/logo.png" alt="" width="350vw">
                </div>
            </div>
        </div>
        <di class="row">
            <div class="col-4">

            </div>
        </di>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))

                <div class="top-right links">
                    @auth
                    <a href="{{ url('/home') }}"><button class="btn btn-outline-primary">Volver al Sitio</button></a>

                    {{-- <a  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><button class="btn btn-outline-primary">{{ __('Administrador') }} </button>

                    </a> --}}
                    <form id="logout-form" action="#" method="GET" style="display: none;">
                        @csrf
                    </form>

                    @else

                        <a href="{{ route('login') }}"><button class="btn btn-outline-primary">Iniciar Sesion</button></a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"><button class="btn btn-outline-primary">Registrarse</button></a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <div class="container text-center">
            <a class="m-1" href="" data-toggle="modal" data-target="#questions">Preguntas frecuentes</a>
            <a class="m-1" href="" data-toggle="modal" data-target="#condiciones">Condiciones</a>
            <a class="m-1" href=""data-toggle="modal" data-target="#datos">Politica de datos</a>
            <a class="m-1" href=""data-toggle="modal" data-target="#cookies">Policita de cookies</a>
        </div>
        {{-- <div class="container text-center">
            <a class="m-1 text-danger" href="{{'/admin'}}">Acceso administradores</a>

        </div> --}}
    @include('footer')
    </body>
</html>
