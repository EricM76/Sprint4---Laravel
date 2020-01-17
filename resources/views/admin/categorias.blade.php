@extends('layouts.admin')

@section('content')
<div class="container mt-4 d-flex justify-center">
        <section id="team" class="">
                <div class="row">
                    @foreach ($categorias as $categoria)
                    <div class="col-3 my-2">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <img class="img-fluid" src="/images/{{$categoria->image}}" width="80%">
                                            <h5 class="mt-1">id {{$categoria->id}}</h5>
                                            <h5 class="card-text mt-2 text-uppercase alert-secondary">{{$categoria->name}}</h5>

                                            @switch($categoria->id)
                                            @case(1)
                                                <h5>{{$autos->count()}} publicaciones</h5>
                                                @break
                                            @case(2)
                                                <h5>{{$inmuebles->count()}} publicaciones</h5>
                                                @break
                                            @case(3)
                                                <h5>{{$muebles->count()}} publicaciones</h5>
                                                @break
                                            @case(4)
                                                <h5>{{$herramientas->count()}} publicaciones</h5>
                                                @break
                                            @case(5)
                                                <h5>{{$electro->count()}} publicaciones</h5>
                                                @break
                                            @case(6)
                                                <h5>{{$gamers->count()}} publicaciones</h5>
                                                @break
                                            @case(7)
                                                <h5>{{$juguetes->count()}} publicaciones</h5>
                                                @break
                                            @case(8)
                                                <h5>{{$libros->count()}} publicaciones</h5>
                                                @break
                                            @case(9)
                                                <h5>{{$rodados->count()}} publicaciones</h5>
                                                @break
                                            @case(10)
                                                <h5>{{$celulares->count()}} publicaciones</h5>
                                                @break
                                            @default
                                        @endswitch
                                        </div>
                                    </div>
                                </div>
                                <div class="backside p-0" style="width:250px;">
                                    <div class="card">
                                        <div class="card-body text-center mt-0">
                                            <button class="btn-sm btn-success mt-1 p-1" style="width:70%">listar productos</button>
                                            <button class="btn-sm btn-danger mt-1 p-1" style="width:70%">eliminar categoria</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </section>
</div>
@endsection
