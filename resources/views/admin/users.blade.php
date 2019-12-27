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
                    <h6 class="text-black-50">Home: </h6>
                        <p class="text-small">{{$usuario->home}}</p>
                        <hr>
                        <h6 class="text-black-50">Phone: </h6>
                        <p class="text-small">{{$usuario->phone}}</p>
                        <hr>
                        <h6 class="text-black-50">Mobile: </h6>
                        <p class="text-small">{{$usuario->mobile}}</p>
                    </div>

                </div>
        </div>

        @endforeach
    </div>


</div>
@endsection
