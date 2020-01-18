@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex justify-content-center mt-4">

<div class="col-sm-12 col-md-12 col-lg-8">
    <div class="card ">
        <div class="card-header text-white bg-primary">{{ __('Proponer Trukeo') }}</div>

        <div class="card-body">
            <div class="row">
                <div class="col-4 text-center">

                    <img src="/storage/images/products/{{$producto->image1}}" alt="" class="img-fluid img-thumbnail">
                    <hr>
                    <h5 class="text-secondary">Producto ofrecido</h5>
                    <h4 class="card-title">{{$producto->title}}</h4>
                    <h6>{{$producto->value}} truekoins</h6>
                </div>
                <div class="col-4 text-center">

                    <img src="/storage/images/products/{{$truekeo->image1}}" alt="" class="img-fluid img-thumbnail">
                    <hr>
                    <h5 class="text-secondary">Producto deseado</h5>
                    <h4 class="card-title">{{$truekeo->title}}</h4>
                    <h6>{{$truekeo->value}} truekoins</h6>
                </div>
                <div class="col-4">
                    <h5 class="text-secondary">Mensaje a enviar</h5>
                    <hr>
                    <p class="card-title " style="line-height: 150% ">Hola {{$producto->user->name}}. Soy {{$usuario->name}}. Te propongo  <strong> TRUEKEAR</strong> tu <em class="text-danger">{{$producto->title}}</em> por mi <em class="text-danger">{{$truekeo->title}}</em>. Si estás interesado confirma el <STrong>TRUEKEO</STrong></p>
                    <div class="d-flex justify-content-center mt-5 align-items-end">
                        <a href="/truekeo/propuesta/{{$producto->id}}/{{$truekeo->id}}"><button class="btn-sm btn-success mt-5">Enviar propuesta</button></a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection

