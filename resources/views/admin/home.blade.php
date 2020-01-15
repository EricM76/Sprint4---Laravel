@extends('layouts.admin')

@section('content')
<div class="container" style="height:72vh">
    <div class="row my-4 p-2">
        <div class="card col-3">
            <h3 class="card-title text-light bg-primary p-2 mt-2" style="height:8vh; width:100%">Usuarios</h3>
            <div class="p-0 mb-5">
                <img src="/images/usuarios.png" class="" style="height:200px; width:250px">
            </div>

            <div class="card-body">

              {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                <div class="text-center">
                    <a href=""><button class="btn-sm btn-warning">Ver todos</button></a>
                    <a href=""><button class="btn-sm btn-danger">Buscar</button></a>
                </div>
            </div>
        </div>

        <div class="card col-3">
            <h3 class="card-title text-light p-2 mt-2 bg-success" style="height:8vh">Categorías</h3>
            <div class="p-0 mb-5">
                <img src="/images/categorias.png" class="" style="height:200px; width:250px">
            </div>

            <div class="card-body">

              {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                <div class="text-center">
                    <a href=""><button class="btn-sm btn-warning">Ver todos</button></a>
                    <a href=""><button class="btn-sm btn-danger">Buscar</button></a>
                </div>
            </div>
        </div>

        <div class="card col-3">
            <h3 class="card-title text-light bg-danger p-2 mt-2" style="height:8vh">Publicaciones</h3>
            <div class="p-0 mb-5">
                <img src="/images/posteos.png" class="" style="height:200px; width:250px">
            </div>

            <div class="card-body">

              {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                <div class="text-center">
                    <a href=""><button class="btn-sm btn-warning">Ver todos</button></a>
                    <a href=""><button class="btn-sm btn-danger">Buscar</button></a>
                </div>
            </div>
        </div>


        <div class="card col-3">
            <h3 class="card-title text-light bg-secondary p-2 mt-2" style="height:8vh">Truekes</h3>
            <div class="p-0 mb-5">
                <img src="/images/truekes.jpg" class="" style="height:200px; width:250px">
            </div>

            <div class="card-body">

            {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                <div class="text-center">
                    <a href=""><button class="btn-sm btn-warning">Ver todos</button></a>
                    <a href=""><button class="btn-sm btn-danger">Buscar</button></a>
                </div>
            </div>
        </div>
    </div>

    </div>


@endsection
