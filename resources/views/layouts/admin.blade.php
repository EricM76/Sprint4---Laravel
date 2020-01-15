
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administracion</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<header>
   <div id="app">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/admin/home') }}">
                <img class="img-fluid" src="/images/logo-sm.png" alt="" width="100px">
            </a>

            <div class="row collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="nav ml-5">

                    <li class="nav-item pl-2 dropdown">
                        <a class="nav-link text-light dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-map-signs mr-1"></i>Usuarios</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/admin.users">Todos</a>
                            <a class="dropdown-item" href="#">Buscar</a>
                        </div>
                    </li>

                    <li class="nav-item pl-2 dropdown">
                        <a class="nav-link text-light dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-map-signs mr-1"></i>Categorias</a>
                        <div class="dropdown-menu">

                            @foreach ($categorias as $categoria)
                            <a class="dropdown-item" href="#">{{$categoria->name}}</a>
                            @endforeach

                        {{-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a> --}}
                        </div>
                    </li>

                    <li class="nav-item pl-2 dropdown">
                        <a class="nav-link text-light dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-map-signs mr-1"></i>Publicaciones</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Todos</a>
                            <a class="dropdown-item" href="#">Buscar</a>
                        </div>
                    </li>

                    <li class="nav-item pl-2 dropdown">
                        <a class="nav-link text-light dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-map-signs mr-1"></i>Truekes</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Todos</a>
                            <a class="dropdown-item" href="#">Buscar</a>
                        </div>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto mr-2 align-items-end">

                    <li class="nav-item dropdown m-2">
                        <a id="navbarDropdown" class="nav-link text-light dropdown-toggle m-1" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="display:inline">{{Auth::user()->name}} <span class="caret"></span></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/home">Volver al Home</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

</div>
</header>
<main id="main">
    @yield('content')
</main>
<footer style="height:8vh; background-color:black">
    <h5 class="h5 text-center p-3 text-light">Proyecto Integrador Digital House by <strong>Alexis Veiga - Eric Mena - Marcos Palladini</strong> </h5>
</footer>
   <script src="/js/app.js"></script>
</body>
</html>
