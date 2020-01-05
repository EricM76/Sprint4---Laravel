@extends('layouts.admin')

@section('content')
<div class="container mt-2 d-flex justify-center">
    <div class="row">
        @foreach ($usuarios as $usuario)
        <div class="col-3">
            <div class="card mx-1 my-2">
                <div class="row p-2">
                    <div class="col-6">
                        <img src="storage/images/avatar/{{$usuario['profile']}}" class="" alt="..." width="120px">
                    </div>
                    <div class="col-6 p-3">
                    <a href="/admin.posteos/{{$usuario->id}}" class="">Posteos</a>
                        <a href="#" class="">Truekes</a>
                        <a href="#" class="">Contactos</a>
                        <a href="#" class="">Valoracion</a>
                    </div>

                </div>

                    <div class="card-body">
                    <h5 class="card-title">{{$usuario->name." ".$usuario->surname}} </h5>
                    <p class="text-small">{{$usuario->email}}</p>
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
                    </form>
                    <hr>
                    <form action="" class="form-horizontal">
                        <label class="text-black-50">Phone:</label>
                        <label class="text-small" >{{$usuario->phone}}</label>
                        <br>
                        <label class="text-black-50">Mobile:</label>
                        <label class=" ml-1 text-small" >{{$usuario->mobile}}</label>
                    </form>
                    </div>

                </div>
        </div>

        @endforeach
    </div>


</div>
@endsection
