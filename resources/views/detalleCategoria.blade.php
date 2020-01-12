@extends('layouts.app')

@section('content')

  <section class="mt-3">

      <div class="container-fluid mt-3">
        <div class="card mt-3" id="categoria">
            <div class="card-body">
                <h2 class="text-capitalize">{{$categoria}}</h2>
                <div class="row">
                    @foreach ($productos as $producto)
                    <div class="col-sm-12 col-md-6 col-lg-2 mb-4">
                        <div class="card p-2">
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
                <div class="d-flex justify-content-center">
                    {{$productos->links()}}
                    <style>.pagination>li>a, .pagination>li>span {margin: 0 5px;}</style>
                </div>
                </div>
            </div>
        </div>
    </section>


@endsection
