@extends('layouts.app')

@section('content')
<div class="container-fluid">

<section class="carrousel mb-0 mt-0">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>


        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="3000">
            <img src="images\hogar.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-interval="3000">
            <img src="images\audioVideo.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-interval="3000">
            <img src="images\electroHogar.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-interval="3000">
            <img src="images\encuentra.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-interval="3000">
            <img src="images\juguetes.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-interval="3000">
            <img src="images\nuevaCasa.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-interval="3000">
            <img src="images\smartphone.jpg" class="d-block w-100" alt="...">
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <section>
            {{-- <div class="row d-flex justify-content-center">

        @foreach ($productos as $producto)
        <div class="card col-3 m-2" style="width: 18rem;">
        <img src="/storage/images/products/{{$producto['image1']}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$producto['title']}}</h5>
            <p class="card-text">{{$producto['description']}}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        @endforeach
</div> --}}
   <div class="row d-flex justify-content-center mt-4">
@foreach ($productos as $producto)
<div class="col-md-3 col-sm-6">

        <div class="product-grid6">
            <div class="product-image6">
                <a href="/detalleproducto/{{$producto->id}}">
                    <img class="pic-1" src="storage/images/products/{{$producto['image1']}}" >
                </a>
            </div>
            <div class="product-content">
            <h3 class="title"><a href=""></a>{{$producto['title']}}</h3>
            <div class="price"> {{$producto['value']}} truekoins
                </div>
            </div>
            <ul class="social">
                <li><a href="/detalleproducto/{{$producto->id}}" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                <li><a href="" data-tip="Contactar"><i class="fa fa-handshake"></i></a></li>
            </ul>
        </div>

    </div>
    @endforeach
</div>
    </section>
</div>
@endsection
