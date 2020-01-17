@extends('layouts.admin')

@section('content')
<div class="container mt-4 d-flex justify-center">
        <section id="team" class="">
                <div class="row">
                    @foreach ($usuarios as $usuario)
                    <div class="col-3 my-2">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <img class="img-fluid" src="storage/images/avatar/{{$usuario['profile']}}" width="80%">
                                            <h5 class="card-text mt-2">{{$usuario->name." ".$usuario->surname}}</h5>
                                            <h6 class="mt-1">{{$usuario->email}}</h6>
                                            <p>Registro nro. {{$usuario->id}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside p-0" style="width:250px;">
                                    <div class="card">
                                        <div class="card-body text-center mt-0">
                                            <form action="" class="form-horizontal">
                                                <label class="text-black-50">Address:</label>
                                                <label class="text-small" >{{$usuario->address}}</label>
                                                <br>
                                                <label class="text-black-50">City:</label>
                                                <label class=" ml-1 text-small" >{{$usuario->city}}</label>
                                                <br>
                                                <label class="text-black-50">State:</label>
                                                <label class=" ml-1 text-small" >{{$usuario->state}}</label>
                                                <br>
                                                <label class="text-black-50">Phone:</label>
                                                <label class="text-small" >{{$usuario->phone}}</label>
                                                <br>
                                                <label class="text-black-50">Mobile:</label>
                                                <label class=" ml-1 text-small" >{{$usuario->mobile}}</label>
                                            </form>

                                            <div class="mt-1">
                                                <a href="#" class="text-small">Publicaciones</a><br>
                                                <a href="#" class="text-small">Propuestas</a><br>
                                                <a href="#" class="text-small">Mensajes</a>
                                            </div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">

                                                </li>
                                                <li class="list-inline-item">

                                                </li>
                                                <li class="list-inline-item">

                                                </li>
                                            </ul>
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
