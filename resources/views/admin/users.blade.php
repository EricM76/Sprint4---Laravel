@extends('layouts.admin')

@section('content')
<div class="container mt-4 d-flex justify-center">
    <div class="row">
        @foreach ($usuarios as $usuario)
        <div class="col-4">
            <div class="card mx-0 my-2">
                <div class="row p-2">
                    <div class="col-4">
                        <img src="storage/images/avatar/{{$usuario['profile']}}" class="" alt="..." width="100px">
                    </div>
                    <div class="col-8 p-3">
                    <h6 class="card-title">Registro: {{$usuario->id}}</h6>
                    <h5 class="card-title">{{$usuario->name." ".$usuario->surname}} </h5>
                    <p class="text-small">{{$usuario->email}}</p>

                    </div>

                </div>
                    <div class="card-body">
                    <form action="" class="form-horizontal">
                        <label class="text-black-50">Address:</label>
                        <label class="text-small" >{{$usuario->address}}</label>
                        {{-- <h6 class="text-black-50">Address: </h6>
                        <p class="text-small">{{$usuario->address}}</p> --}}
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
                    <hr>
                    <div class="d-flex justify-content-between p-1 my-2">
                        <a href="/admin.posteos/{{$usuario->id}}" class="">Publicaciones</a>
                        <a href="#" class="">Propuestas</a>
                        <a href="#" class="">Mensajes</a>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-center py-3">
                        <button class="btn-sm btn-danger">Eliminar</button>
                    </div>
                    </div>

                </div>
        </div>

        @endforeach
    </div>


</div>
@endsection
