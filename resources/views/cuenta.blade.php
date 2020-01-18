@extends('layouts.app')
@if (isset($_GET['id']))
@switch($_GET['id'])
    @case('nav-miPerfil-tab')
    <script>
        window.onload = function()
        {
        var pestaña = document.getElementById('nav-miPerfil-tab');
        var contenido = document.getElementById('nav-perfil');
        pestaña.className = 'nav-item nav-link active';
        contenido.className = 'tab-pane fade show active'
        }
    </script>
        @break
    @case('nav-profile-tab')
    <script>
        window.onload = function()
        {
        var pestaña = document.getElementById('nav-profile-tab');
        var contenido = document.getElementById('nav-truekes');
        pestaña.className = 'nav-item nav-link active';
        contenido.className = 'tab-pane fade show active'
        }
    </script>
        @break
    @case('nav-contact-tab')
    <script>
        window.onload = function()
        {
        var pestaña = document.getElementById('nav-messages-tab');
        var contenido = document.getElementById('nav-messages');
        pestaña.className = 'nav-item nav-link active';
        contenido.className = 'tab-pane fade show active'
        }
    </script>
        @break

    @case('nav-misPropuestas-tab')
    <script>
        window.onload = function()
        {
        var pestaña = document.getElementById('nav-misPropuestas-tab');
        var contenido = document.getElementById('nav-propuestas');
        pestaña.className = 'nav-item nav-link active';
        contenido.className = 'tab-pane fade show active'
        }
    </script>
        @break
    @default



    <script>

        window.onload = function()
        {
            mapa.initMap();

        }
    </script>
@endswitch
@endif

@section('content')
<div class="container mt-4 d-flex justify-content-center">
    <div class=" col-sm-12 col-md-12 col-lg-12">
        <div class="card ">
            <div class="card-header h3 text-white bg-primary"><i class="fas fa-user-circle mr-3"></i>{{ __('Mi Cuenta') }}
            </div>
            <div class="card-header">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">

                        <a class="nav-item nav-link" id="nav-miPerfil-tab" data-toggle="tab" href="#nav-perfil" role="tab" aria-controls="nav-perfil" aria-selected="true"><i class="fas fa-user mr-2"></i>Datos Personales</a>

                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contacto" role="tab" aria-controls="nav-contacto" aria-selected="false"><i class="fas fa-users mr-2"></i>Datos de Contacto</a>

                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-truekes" role="tab" aria-controls="nav-truekes" aria-selected="false"><i class="fas fa-bullhorn mr-2"></i>Mis Productos</a>

                        <a class="nav-item nav-link" id="nav-misPropuestas-tab" data-toggle="tab" href="#nav-propuestas" role="tab" aria-controls="nav-propuestas" aria-selected="false"><i class="fas fa-users mr-2"></i>Mis propuestas</a>

                        <a class="nav-item nav-link" id="nav-messages-tab" data-toggle="tab" href="#nav-messages" role="tab" aria-controls="nav-messages" aria-selected="false"><i class="fas fa-envelope mr-2"></i>Mensajes</a>



                    </div>
                </nav>
                <div class="tab-content mt-3" id="nav-tabContent">
                    <div class="tab-pane fade " id="nav-perfil" role="tabpanel" aria-labelledby="nav-perfil-tab">
                    <form action="/cuenta/ {{Auth::user()->id}} " method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                @if (Auth::user()->profile==null)
                                <div class="d-flex justify-content-center">
                                <a class="mt-5" href="" data-toggle="modal" data-target="#avatar">agregar imagen de perfil</a>
                                </div>
                                @else
                                <div class="text-center">
                                <a class="mt-2" href="" data-toggle="modal" data-target="#avatar"><img class="img-fluid" src="storage/images/avatar/{{Auth::user()->profile}}" alt="">
                               </a>
                                </div>
                                @endif


                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-8">
                                <div class="row">
                                    <div class="col-sm-12 col-lg-6">
                                        <label class="col-form-label-sm" for="">Nombre:</label>
                                        <input class="form-control" type="text" value="{{Auth::user()->name}}" name="nombre" disabled>
                                        @if ($errors->nombre)
                                        <p class="text-danger small">{{$errors->first('nombre')}}</p>
                                        @endif
                                    </div>
                                    <div class="col-sm-12 col-lg-6">
                                        <label class="col-form-label-sm" for="">Apellido:</label>
                                        <input class="form-control" type="text" value="{{Auth::user()->surname}}" name="apellido" disabled>
                                        @if ($errors->apellido)
                                        <p class="text-danger small">{{$errors->first('apellido')}}</p>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <label class="col-form-label-sm" for="">Cumpleaños:</label>
                                        <input class="form-control" type="date" value="{{Auth::user()->birth}}" name="fecha" disabled>
                                        @if ($errors->fecha)
                                        <p class="text-danger small">{{$errors->first('fecha')}}</p>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <label class="col-form-label-sm" for="">Género:</label>
                                        <select class="form-control" name="genero" >
                                        <option value="{{Auth::user()->gender}}">{{Auth::user()->gender}}</option>
                                        <option value="masculino">masculino</option>
                                        <option value="femenino">femenino</option>
                                        <option value="sin especificar">sin especificar</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="row d-flex justify-content-center mt-3">

                                <a href="{{'/home'}}"><button class="btn btn-secondary m-2" type="button">Cerrar </button></a>
                                <button class="btn btn-primary m-2" type="submit">Aceptar</button>
                                @if (session('mensaje'))
                                <alert class="alert alert-success m-1">{{session('mensaje')}}</alert>
                                @endif
                                </div>
                                </div>
                                <div class="row">

                            </div>

                        </div>
                    </form>

                    </div>

                    <div class="tab-pane fade" id="nav-contacto" role="tabpanel" aria-labelledby="nav-contacto-tab">
                    <form action="/cuenta/ {{Auth::user()->id}}" method="POST">
                        @csrf
                        @method('PUT')


                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-4">
                                                <label class="col-form-label-sm" for="">Direccion:</label>
                                            </div>
                                            <div class="col-4">
                                                <label class="col-form-label-sm" for="">Localidad:</label>
                                            </div>
                                            <div class="col-4">
                                                <label class="col-form-label-sm" for="">Provincia:</label>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="input-group mb-2 mr-sm-2">
                                                    <div class="input-group-prepend">
                                                      <button class="input-group-text" id="address" onClick="event.preventDefault(); initMap()"><i class="fas fa-map"></i></button>
                                                    </div>
                                                    <input id="direccion" type="text" class="form-control" placeholder="direccion" value="{{Auth::user()->address}}" name="direccion">
                                                  </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="input-group mb-2 mr-sm-2">
                                                    <div class="input-group-prepend">
                                                      <button type="button" class="input-group-text" id="city"><i class="fas fa-map"></i></button>
                                                    </div>
                                                    <input id="localidad" type="text" class="form-control" placeholder="localidad" value="{{Auth::user()->city}}" name="localidad">
                                                    <select name="" id="localidades" style="display:none;">
                                                    </select>
                                                  </div>

                                            </div>
                                            <div class="col-4">
                                                <div class="input-group mb-2 mr-sm-2">
                                                    <div class="input-group-prepend">
                                                      <button  type="button" class="input-group-text" id="state"><i class="fas fa-map"></i></button>
                                                    </div>
                                                    <input id="provincia" type="text" class="form-control" placeholder="provincia" value="{{Auth::user()->state}}" name="provincia">
                                                    <select name="" id="provincias" style="display:none;">
                                                    </select>
                                                  </div>

                                                  @include('/apis/apiUbicacion')

                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-12">

                                        <div class="row">
                                            <div class="col-4  p-2">
                                                <div id="map" style="width:100%; height:300px"></div>
                                                <div><p id="coordenadas"></p></div>

                                                @include('/apis/apiGeocoordenadas')

                                            </div>

                                            <div class="col-8">
                                                <label class="col-form-label-sm" for="">Telefono:</label>
                                                <input class="form-control" type="text" value="{{Auth::user()->phone}}" name="telefono">
                                                <label class="col-form-label-sm" for="">Celular:</label>
                                                <input class="form-control" type="text" value="{{Auth::user()->mobile}}" name="celular">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="row d-flex justify-content-center mt-3">
                                    <a href="{{'/home'}}"><button class="btn btn-secondary m-2" type="button">Cerrar </button></a>
                                    <button class="btn btn-primary m-2" type="submit">Aceptar</button>
                                </div>



                    </form>
                    </div>

                    <div class="tab-pane fade" id="nav-truekes" role="tabpanel" aria-labelledby="nav-truekes-tab">
                        @if (isset($sinPosteos))
                        <div class="d-flex justify-content-center">
                            <h5 class="alert-info p-2"><i class="fas fa-hand-point-right mr-1"></i>{{$sinPosteos}}</h5>
                        </div>
                        @endif
                        <div class="card-columns">
                            @if ($posteos->isNotEmpty())


                            @foreach ($posteos as $posteo)
                            <div class="col mb-4">
                                <div class="card">
                                <img src="/storage/images/products/{{$posteo->image1}}" class="card-img-top" alt="...">
                                  <div class="card-body">
                                      <div></div>
                                  <h5 class="card-title">{{$posteo->title}}</h5>
                                  <h6>{{$posteo->value}} truekoins</h6>
                                  </div>
                                  <div class="p-2 text-center">
                                    <a href="/editarProduct/{{$posteo->id}}"> <button class="btn btn-sm btn-outline-success">Editar</button></a>
                                  <a href="/eliminarProduct/{{$posteo->id}}"> <button class="btn btn-sm btn-outline-danger">Eliminar</button></a>

                                  </div>
                                </div>
                              </div>
                            @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-messages" role="tabpanel" aria-labelledby="nav-messages-tab">
                        @if (isset($sinMensajes))
                        <div class="d-flex justify-content-center">
                            <h5 class="alert-success p-2"><i class="fas fa-hand-point-right mr-1"></i>{{$sinMensajes}}</h5>
                        </div>
                        @endif
                            <section id="team" class="">
                                <div class="container">
                                    <div class="row">
                                        @if ($mensajes ->isNotEmpty())
                                        @foreach ($mensajes as $mensaje)
                                        @if ($mensaje->status == 'propuesto')

                                        <div class="col-3">
                                            <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                                <div class="mainflip">
                                                    <div class="frontside">
                                                        <div class="card">
                                                            <div class="card-body text-center">
                                                                <h4><img class="img-fluid" src="/storage/images/avatar/{{$mensaje->userOrigin->profile}}">{{$mensaje->userOrigin->name}}</h4>
                                                                <h6>TE OFRECE</h6><p class="card-text">{{$mensaje->ProductOrigin->title}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="backside">
                                                        <div class="card">
                                                            <div class="card-body text-center mt-4">
                                                                <p class="card-text">{{$mensaje->message}}</p>
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a class="" data-toggle="modal" data-target="#staticBackdrop" href="#"><button type="button" class="btn-sm btn-success">
                                                                        Ver Producto</button></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @if ($mensaje->status == 'rechazado')
                                        <div class="col-3">
                                            <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                                <div class="mainflip">
                                                    <div class="frontside">
                                                        <div class="card">
                                                            <div class="card-body text-center">
                                                                <h4><img class="img-fluid" src="/storage/images/avatar/{{$mensaje->userOrigin->profile}}">{{$mensaje->userOrigin->name}}</h4>
                                                                <h6>RECHAZÓ TU PROPUESTA DE TRUEKEO</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="backside">
                                                        <div class="card">
                                                            <div class="card-body text-center mt-4">
                                                                <p class="card-text">{{$mensaje->message}}</p>
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a class="" href="/rechazarMensaje/{{$mensaje->id}}"><button type="button" class="btn-sm btn-danger">
                                                                        Borrar Mensaje</button></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @include('/modal/modalMensajes')
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </section>
                        </div>

                    <div class="tab-pane fade" id="nav-propuestas" role="tabpanel" aria-labelledby="nav-misPropuestas-tab">
                        @if (isset($sinPropuestas))
                        <div class="d-flex justify-content-center">
                            <h5 class="alert-danger p-2"><i class="fas fa-hand-point-right mr-1"></i> {{$sinPropuestas}}</h5>
                        </div>
                        @endif
                        <section id="team" class="">
                            <div class="container">
                        <div class="row">
                            @if ($propuestas ->isNotEmpty())
                            @foreach ($propuestas as $propuesta)
                            <div class="col-4">
                                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                    <div class="mainflip">
                                        <div class="frontside">
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <p class="text-secondary mb-2 text-right">{{$propuesta->created_at->diffForHumans()}}</p>
                                                    <img class="img-fluid" src="/storage/images/products/{{$propuesta->ProductOrigin->image1}}">
                                                    <h5 class="mt-2">Truekeo mi</h5>
                                                    <h4 class="">{{$propuesta->ProductOrigin->title}}</h4>
                                                    <h5>de {{$propuesta->ProductOrigin->value}} truekoins</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="backside">
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <img class="img-fluid" src="/storage/images/products/{{$propuesta->ProductDestinity->image1}}">
                                                    <h5 class="mt-1">{{$propuesta->ProductDestinity->title}}</h5>
                                                    <h5 class="text-primary">{{$propuesta->ProductDestinity->value}} TRUEKOINS</h5>
                                                    <h6>publicado por {{$propuesta->UserDestinity->name}}</h6>
                                                    <div>
                                                        <a href="/detalleproducto/{{$propuesta->ProductDestinity->id}}"><button class="btn btn-sm btn-success">Más info</button></a>
                                                        <a href="/desistirPropuesta/{{$propuesta->id}}"><button class="btn btn-sm btn-danger">Desistir</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                            </div>
                            </section>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('layouts.profile')
@endsection
