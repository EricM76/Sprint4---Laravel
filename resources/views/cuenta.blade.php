@extends('layouts.app')

@section('content')
<div class="container mt-4 d-flex justify-content-center">
    <div class=" col-sm-12 col-md-12 col-lg-10">
        <div class="card ">
            <div class="card-header h3 text-white bg-primary"><i class="fas fa-user-circle mr-3"></i>{{ __('Mi Cuenta') }}
            </div>
            <div class="card-header">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">

                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-perfil" role="tab" aria-controls="nav-perfil" aria-selected="true"><i class="fas fa-user mr-2"></i>Datos Personales</a>

                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contacto" role="tab" aria-controls="nav-contacto" aria-selected="false"><i class="fas fa-users mr-2"></i>Datos de Contacto</a>

                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-truekes" role="tab" aria-controls="nav-truekes" aria-selected="false"><i class="fas fa-bullhorn mr-2"></i>Mis Truekes</a>

                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contactos" role="tab" aria-controls="nav-contactos" aria-selected="false"><i class="fas fa-users mr-2"></i>Mis Contactos</a>

                    </div>
                </nav>
                <div class="tab-content mt-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-perfil" role="tabpanel" aria-labelledby="nav-perfil-tab">
                    <form action="/cuenta/ {{Auth::user()->id}} " method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-4">
                                <img class="img-fluid" src="storage/image/profiles/{{Auth::user()->profile}}" alt="">
                            </div>
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="col-form-label-sm" for="">Nombre:</label>
                                        <input class="form-control" type="text" value="{{Auth::user()->name}}" name="nombre">
                                        @if ($errors->nombre)
                                        <p class="text-danger small">{{$errors->first('nombre')}}</p>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <label class="col-form-label-sm" for="">Apellido:</label>
                                        <input class="form-control" type="text" value="{{Auth::user()->surname}}" name="apellido">
                                        @if ($errors->apellido)
                                        <p class="text-danger small">{{$errors->first('apellido')}}</p>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <label class="col-form-label-sm" for="">Cumpleaños:</label>
                                        <input class="form-control" type="date" value="{{Auth::user()->birth}}" name="fecha">
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
                                <a href="{{'/home'}}"><button class="btn btn-secondary m-2" type="button">Cancelar </button></a>
                                    <button class="btn btn-primary m-2" type="submit">Aceptar</button>
                                </div>

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
                                        <label class="col-form-label-sm" for="">Domicilio:</label>
                                        <input class="form-control" type="text" value="{{Auth::user()->home}}" name="domicilio">
                                    </div>
                                    <div class="col-6">
                                        <label class="col-form-label-sm" for="">Telefono:</label>
                                        <input class="form-control" type="text" value="{{Auth::user()->phone}}" name="telefono">
                                    </div>
                                    <div class="col-6">
                                        <label class="col-form-label-sm" for="">Celular:</label>
                                        <input class="form-control" type="text" value="{{Auth::user()->mobile}}" name="celular">
                                    </div>

                                </div>
                                <div class="row d-flex justify-content-center mt-3">
                                    <button class="btn btn-secondary m-2" type="button">Cancelar</button>
                                    <button class="btn btn-primary m-2" type="submit">Aceptar</button>
                                </div>



                    </form>
                    </div>

                    <div class="tab-pane fade" id="nav-truekes" role="tabpanel" aria-labelledby="nav-truekes-tab">
                        <h3>Truekes</h3>
                    </div>

                    <div class="tab-pane fade" id="nav-contactos" role="tabpanel" aria-labelledby="nav-contactos-tab">
                        <h3>contactos</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection