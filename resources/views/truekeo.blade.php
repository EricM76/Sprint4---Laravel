@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex justify-content-center mt-4">

<div class="col-sm-12 col-md-12 col-lg-8">
    <div class="card ">
        <div class="card-header text-white bg-primary">{{ __('Proponer Trukeo') }}</div>

        <div class="card-body">
            <div class="row">
                <div class="col card p-1" style="width: 18rem;">
                <img src="/storage/images/products/{{$producto->image1}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$producto->title}}</h5>
                    <h4>{{$producto->value}} truekoins</h4>
                    </div>

                </div>
                <div class="col card p-1" style="width: 18rem;">
                    <img src="/storage/images/products/{{$truekeo->image1}}" class="" alt="..." width="100%">
                        <div class="card-body">
                            <h5 class="card-title">{{$truekeo->title}}</h5>
                        <h4>{{$truekeo->value}} truekoins</h4>
                        </div>
                </div>
            </div>
            <div class="row mt-2">
                  <div class="card w-100">
                    <div class="card-header">
                        Mensaje
                    </div>
                    <div class="card-body">
                    <p class="card-title text-uppercase h4" style="line-height: 150% ">Hola, soy {{$usuario->name}}. Te propongo  <strong> TRUEKEAR</strong> tu <em class="text-danger">{{$producto->title}}</em> por mi <em class="text-danger">{{$truekeo->title}}</em>. Si estás interesado confirma el <STrong>truekeo</STrong></p>
                    <div class="d-flex justify-content-end">
                        <button class="btn-primary">Enviar propuesta</button>
                    </div>

                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>

@endsection

