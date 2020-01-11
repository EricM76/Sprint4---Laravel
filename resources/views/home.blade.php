@extends('layouts.app')

@section('content')
<div class="">

    <section class="carrousel">
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
</div>
<div class="container">
    <section id="publicaciones">

        <div class="card mt-3" id="autos">
            <div class="card-body">
                <div class="row">
                    <div class="col-6"> <h3 class="card-title">Autos</h3>
                        <h6 class="card-subtitle mb-2 text-muted">La oportunidad para cambiar tu vehículo por un más nuevo</h6></div>
                    <div class="col-6 text-right"><a class="btn btn-danger btn-sm" href="/detalleCategoria/1">ver más</a></div>
                </div>


                <div class="row d-flex justify-content-center mt-4">

                    @foreach ($autos as $auto)
                    <div class="col-md-3 col-sm-6">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="/detalleproducto/{{$auto->id}}">
                                     <img class="pic-1" src="storage/images/products/{{$auto['image1']}}" >
                                 </a>
                             </div>
                             <div class="product-content">
                             <h3 class="title"><a href=""></a>{{$auto['title']}}</h3>
                             <div class="price"> {{$auto['value']}} truekoins</div>
                             <div><p class="text-secondary">Publicado {{$auto->created_at->diffForHumans()}}</p></div>
                             </div>
                             <ul class="social">
                                 <li><a href="/detalleproducto/{{$auto->id}}" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                                 <li><a href="" data-tip="Contactar"><i class="fa fa-handshake"></i></a></li>
                             </ul>
                         </div>
                     </div>
                    @endforeach
                 </div>
            </div>
          </div>

          <div class="card mt-3" id="inmuebles">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h3 class="card-title">Inmbuebles</h3>
                        <h6 class="card-subtitle mb-2 text-muted">Si querés cambiar de barrio o ciudad, esta es tu oportunidad</h6>
                    </div>
                    <div class="col-6 text-right"><a class="btn btn-danger btn-sm" href="/detalleCategoria/2">ver más</a>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-4">

                    @foreach ($inmuebles as $inmueble)
                    <div class="col-md-3 col-sm-6">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="/detalleproducto/{{$inmueble->id}}">
                                     <img class="pic-1" src="storage/images/products/{{$inmueble['image1']}}" >
                                 </a>
                             </div>
                             <div class="product-content">
                             <h3 class="title"><a href=""></a>{{$inmueble['title']}}</h3>
                             <div class="price"> {{$inmueble['value']}} truekoins</div>
                             <div><p class="text-secondary">Publicado {{$inmueble->created_at->diffForHumans()}}</p></div>
                             </div>
                             <ul class="social">
                                 <li><a href="/detalleproducto/{{$inmueble->id}}" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                                 <li><a href="" data-tip="Contactar"><i class="fa fa-handshake"></i></a></li>
                             </ul>
                         </div>
                     </div>
                    @endforeach
                 </div>
            </div>
          </div>


          <div class="card mt-3" id="muebles">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h3 class="card-title">Muebles</h3>
                        <h6 class="card-subtitle mb-2 text-muted">¿Querés cambiar tu mobiliario? Encontrá lo que necesitás</h6>
                    </div>
                    <div class="col-6 text-right"><a class="btn btn-danger btn-sm" href="/detalleCategoria/3">ver más</a>
                    </div>
                </div>

                <div class="row d-flex justify-content-center mt-4">

                    @foreach ($muebles as $mueble)
                    <div class="col-md-3 col-sm-6">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="/detalleproducto/{{$mueble->id}}">
                                     <img class="pic-1" src="storage/images/products/{{$mueble['image1']}}" >
                                 </a>
                             </div>
                             <div class="product-content">
                             <h3 class="title"><a href=""></a>{{$mueble['title']}}</h3>
                             <div class="price"> {{$mueble['value']}} truekoins</div>
                             <div><p class="text-secondary">Publicado {{$mueble->created_at->diffForHumans()}}</p></div>
                             </div>
                             <ul class="social">
                                 <li><a href="/detalleproducto/{{$mueble->id}}" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                                 <li><a href="" data-tip="Contactar"><i class="fa fa-handshake"></i></a></li>
                             </ul>
                         </div>
                     </div>
                    @endforeach
                 </div>
            </div>
          </div>

          <div class="card mt-3" id="herramientas">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h3 class="card-title">Herramientas</h3>
                        <h6 class="card-subtitle mb-2 text-muted">¿Necesitas una herramienta? Cambiala por la que no usás</h6>
                    </div>
                    <div class="col-6 text-right"><a class="btn btn-danger btn-sm" href="/detalleCategoria/4">ver más</a>
                    </div>
                </div>

                <div class="row d-flex justify-content-center mt-4">

                    @foreach ($herramientas as $herramienta)
                    <div class="col-md-3 col-sm-6">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="/detalleproducto/{{$herramienta->id}}">
                                     <img class="pic-1" src="storage/images/products/{{$herramienta['image1']}}" >
                                 </a>
                             </div>
                             <div class="product-content">
                             <h3 class="title"><a href=""></a>{{$herramienta['title']}}</h3>
                             <div class="price"> {{$herramienta['value']}} truekoins</div>
                             <div><p class="text-secondary">Publicado {{$herramienta->created_at->diffForHumans()}}</p></div>
                             </div>
                             <ul class="social">
                                 <li><a href="/detalleproducto/{{$herramienta->id}}" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                                 <li><a href="" data-tip="Contactar"><i class="fa fa-handshake"></i></a></li>
                             </ul>
                         </div>
                     </div>
                    @endforeach
                 </div>
            </div>
          </div>

          <div class="card mt-3" id="electrodomesticos">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h3 class="card-title">Electrodomesticos</h3>
                        <h6 class="card-subtitle mb-2 text-muted">¿Tenés electrodomesticos en deshuso? Usalos para conseguir lo que buscas</h6>
                    </div>
                    <div class="col-6 text-right"><a class="btn btn-danger btn-sm" href="/detalleCategoria/5">ver más</a>
                    </div>
                </div>

                <div class="row d-flex justify-content-center mt-4">

                    @foreach ($electrodomesticos as $electrodomestico)
                    <div class="col-md-3 col-sm-6">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="/detalleproducto/{{$electrodomestico->id}}">
                                     <img class="pic-1" src="storage/images/products/{{$electrodomestico['image1']}}" >
                                 </a>
                             </div>
                             <div class="product-content">
                             <h3 class="title"><a href=""></a>{{$electrodomestico['title']}}</h3>
                             <div class="price"> {{$electrodomestico['value']}} truekoins</div>
                             <div><p class="text-secondary">Publicado {{$electrodomestico->created_at->diffForHumans()}}</p></div>
                             </div>
                             <ul class="social">
                                 <li><a href="/detalleproducto/{{$electrodomestico->id}}" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                                 <li><a href="" data-tip="Contactar"><i class="fa fa-handshake"></i></a></li>
                             </ul>
                         </div>
                     </div>
                    @endforeach
                 </div>
            </div>
          </div>

          <div class="card mt-3" id="gamers">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h3 class="card-title">Gamers</h3>
                        <h6 class="card-subtitle mb-2 text-muted">¿Diste vuelta el juego? Animate a conseguir otro</h6>
                    </div>
                    <div class="col-6 text-right"><a class="btn btn-danger btn-sm" href="/detalleCategoria/6">ver más</a>
                    </div>
                </div>

                <div class="row d-flex justify-content-center mt-4">

                    @foreach ($gamers as $gamer)
                    <div class="col-md-3 col-sm-6">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="/detalleproducto/{{$gamer->id}}">
                                     <img class="pic-1" src="storage/images/products/{{$gamer['image1']}}" >
                                 </a>
                             </div>
                             <div class="product-content">
                             <h3 class="title"><a href=""></a>{{$gamer['title']}}</h3>
                             <div class="price"> {{$gamer['value']}} truekoins</div>
                             <div><p class="text-secondary">Publicado {{$gamer->created_at->diffForHumans()}}</p></div>
                             </div>
                             <ul class="social">
                                 <li><a href="/detalleproducto/{{$gamer->id}}" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                                 <li><a href="" data-tip="Contactar"><i class="fa fa-handshake"></i></a></li>
                             </ul>
                         </div>
                     </div>
                    @endforeach
                 </div>
            </div>
          </div>

          <div class="card mt-3" id="juguetes">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h3 class="card-title">Juguetes</h3>
                        <h6 class="card-subtitle mb-2 text-muted">Tus juguetes te pueden ayudar a conseguir lo que necesitas</h6>
                    </div>
                    <div class="col-6 text-right"><a class="btn btn-danger btn-sm" href="/detalleCategoria/7">ver más</a>
                    </div>
                </div>

                <div class="row d-flex justify-content-center mt-4">

                    @foreach ($juguetes as $juguete)
                    <div class="col-md-3 col-sm-6">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="/detalleproducto/{{$juguete->id}}">
                                     <img class="pic-1" src="storage/images/products/{{$juguete['image1']}}" >
                                 </a>
                             </div>
                             <div class="product-content">
                             <h3 class="title"><a href=""></a>{{$juguete['title']}}</h3>
                             <div class="price"> {{$juguete['value']}} truekoins</div>
                             <div><p class="text-secondary">Publicado {{$juguete->created_at->diffForHumans()}}</p></div>
                             </div>
                             <ul class="social">
                                 <li><a href="/detalleproducto/{{$juguete->id}}" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                                 <li><a href="" data-tip="Contactar"><i class="fa fa-handshake"></i></a></li>
                             </ul>
                         </div>
                     </div>
                    @endforeach
                 </div>
            </div>
          </div>

          <div class="card mt-3" id="libros">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h3 class="card-title">Libros</h3>
                        <h6 class="card-subtitle mb-2 text-muted">¿Ya leiste tu libro? Podés cambiarlo por otro que te interese</h6>
                    </div>
                    <div class="col-6 text-right"><a class="btn btn-danger btn-sm" href="/detalleCategoria/8">ver más</a>
                    </div>
                </div>

                <div class="row d-flex justify-content-center mt-4">

                    @foreach ($libros as $libro)
                    <div class="col-md-3 col-sm-6">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="/detalleproducto/{{$libro->id}}">
                                     <img class="pic-1" src="storage/images/products/{{$libro['image1']}}" >
                                 </a>
                             </div>
                             <div class="product-content">
                             <h3 class="title"><a href=""></a>{{$libro['title']}}</h3>
                             <div class="price"> {{$libro['value']}} truekoins</div>
                             <div><p class="text-secondary">Publicado {{$libro->created_at->diffForHumans()}}</p></div>
                             </div>
                             <ul class="social">
                                 <li><a href="/detalleproducto/{{$libro->id}}" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                                 <li><a href="" data-tip="Contactar"><i class="fa fa-handshake"></i></a></li>
                             </ul>
                         </div>
                     </div>
                    @endforeach
                 </div>
            </div>
          </div>

          <div class="card mt-3" id="rodados">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h3 class="card-title">Rodados</h3>
                        <h6 class="card-subtitle mb-2 text-muted">¿Tu bicicleta te quedó chica? Elije la que más te convenga</h6>
                    </div>
                    <div class="col-6 text-right"><a class="btn btn-danger btn-sm" href="/detalleCategoria/9">ver más</a>
                    </div>
                </div>

                <div class="row d-flex justify-content-center mt-4">

                    @foreach ($rodados as $rodado)
                    <div class="col-md-3 col-sm-6">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="/detalleproducto/{{$rodado->id}}">
                                     <img class="pic-1" src="storage/images/products/{{$rodado['image1']}}" >
                                 </a>
                             </div>
                             <div class="product-content">
                             <h3 class="title"><a href=""></a>{{$rodado['title']}}</h3>
                             <div class="price"> {{$rodado['value']}} truekoins</div>
                             <div><p class="text-secondary">Publicado {{$rodado->created_at->diffForHumans()}}</p></div>
                             </div>
                             <ul class="social">
                                 <li><a href="/detalleproducto/{{$rodado->id}}" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                                 <li><a href="" data-tip="Contactar"><i class="fa fa-handshake"></i></a></li>
                             </ul>
                         </div>
                     </div>
                    @endforeach
                 </div>
            </div>
          </div>

          <div class="card mt-3" id="celulares">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h3 class="card-title">Celulares</h3>
                        <h6 class="card-subtitle mb-2 text-muted">Puedes conseguir el celular que deseas</h6>
                    </div>
                    <div class="col-6 text-right"><a class="btn btn-danger btn-sm" href="/detalleCategoria/10">ver más</a>
                    </div>
                </div>

                <div class="row d-flex justify-content-center mt-4">

                    @foreach ($celulares as $celular)
                    <div class="col-md-3 col-sm-6">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="/detalleproducto/{{$celular->id}}">
                                     <img class="pic-1" src="storage/images/products/{{$celular['image1']}}" >
                                 </a>
                             </div>
                             <div class="product-content">
                             <h3 class="title"><a href=""></a>{{$celular['title']}}</h3>
                             <div class="price"> {{$celular['value']}} truekoins</div>
                             <div><p class="text-secondary">Publicado {{$celular->created_at->diffForHumans()}}</p></div>
                             </div>
                             <ul class="social">
                                 <li><a href="/detalleproducto/{{$celular->id}}" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                                 <li><a href="" data-tip="Contactar"><i class="fa fa-handshake"></i></a></li>
                             </ul>
                         </div>
                     </div>
                    @endforeach
                 </div>
            </div>
          </div>


    </section>
</div>
   <footer class="bg-secondary mt-3" style="height: 5em">
    <div class="container text-center p-3">
        <a class="m-1" href="" data-toggle="modal" data-target="#questions">Preguntas frecuentes</a>
        <a class="m-1" href="" data-toggle="modal" data-target="#condiciones">Condiciones</a>
        <a class="m-1" href=""data-toggle="modal" data-target="#datos">Politica de datos</a>
        <a class="m-1" href=""data-toggle="modal" data-target="#cookies">Policita de cookies</a>
        <style>
        footer a{
            text-decoration: none;
            color: whitesmoke;
            font: 400;
        }
        </style>
    </div>
    @include('footer')
   </footer>

@endsection
