@extends('layouts.app')

@section('content')

  <section class="mt-3">

      <div class="container-fluid mt-3">

        <div class="row">
            @foreach ($productos as $producto)
            <div class="col-3 mb-4">
                <div class="card">
                <a href="/detalleproducto/{{$producto->id}}">
                  <img src="/storage/images/products/{{$producto->image1}}" class="card-img-top" alt="...">
                </a>
                  <div class="card-body">
                      <div></div>
                  <h5 class="card-title">{{$producto->title}}</h5>
                  <h6>{{$producto->value}} truekoins</h6>
                  </div>
                </div>
              </div>
            @endforeach
        </div>

         </div>
      </section>
    @endsection
