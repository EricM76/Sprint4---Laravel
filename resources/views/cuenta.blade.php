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
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-perfil" role="tab" aria-controls="nav-perfil" aria-selected="true"><i class="fas fa-user mr-2"></i> Mi Perfil</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-truekes" role="tab" aria-controls="nav-truekes" aria-selected="false"><i class="fas fa-bullhorn mr-2"></i>Mis Truekes</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contactos" role="tab" aria-controls="nav-contactos" aria-selected="false"><i class="fas fa-users mr-2"></i>Mis Contactos</a>
                    </div>
                </nav>
                <div class="tab-content mt-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-perfil" role="tabpanel" aria-labelledby="nav-perfil-tab">
            <form action="/cuenta" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="nombre" value={{Auth::user()->name}}>
                        </div>
                    </div>
                    <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Apellido:</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" name="apellido" value={{Auth::user()->surname}}>
                            </div>
                        </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" name="email" value={{Auth::user()->email}} disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                First radio
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                Second radio
                            </label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                            <label class="form-check-label" for="gridRadios3">
                                Third disabled radio
                            </label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <div class="col-sm-2">Checkbox</div>
                        <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                            Example checkbox
                            </label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
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
