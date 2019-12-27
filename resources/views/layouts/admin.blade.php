
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administracion</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<header>
   <div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <h2 class="display-5 text-light" href="">SocialTruek</h2>

            <div class="row collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="nav ml-5">
                    <li class="nav-item">
                    <a class="nav-link active text-light" href="#"><i class="fas fa-home mr-1"></i>Inicio</a>
                    </li>

                    <li class="nav-item pl-2">
                    <a class="nav-link text-light" href="/admin.users"><i class="fas fa-heart mr-1"></i>Usuarios</a>
                    </li>

                    <li class="nav-item pl-2 dropdown">
                        <a class="nav-link text-light dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-map-signs mr-1"></i>Categorias</a>
                        <div class="dropdown-menu">

                            {{-- @foreach ($categorias as $categoria)
                        <a class="dropdown-item" href="/detalleCategoria/{{$categoria['id']}}">{{$categoria->name}}</a>
                            @endforeach --}}

                        {{-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a> --}}
                        </div>
                    </li>

                    <li class="nav-item pl-2">
                        <a class="nav-link text-light" href="#"><i class="fas fa-bullhorn mr-1"></i>Posteos</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto mr-2 align-items-end">

                    <li class="nav-item dropdown m-2">

                        <a id="navbarDropdown" class="nav-link text-light dropdown-toggle m-1" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="display:inline">
                            {{$userAdmin}} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="#">Configuracion
                            </a>
                        <a class="dropdown-item" href="/cerrarAdmin/{{$idAdmin}}">Cerrar Sesión
                            </a>

                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

</div>
</header>
   @yield('content')
   <script src="/js/app.js"></script>
</body>
</html>
