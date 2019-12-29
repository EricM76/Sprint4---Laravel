@extends('layouts.admin')

@section('content')
<div class="container mt-5 d-flex justify-content-center">

        <div class="card mt-5" style="width: 30rem;">
        <div class="card-header bg-secondary text-light">
            Configuracion
        </div>
        <div class="card-body">
            <h5 class="card-title">Cambio de contraseña</h5>
            <form action="/admin.pass" method="post">
            @csrf
                <div class="form-group">
                    <input name="passOld" type="password" class="form-control" id="formGroupExampleInput" placeholder="contraseña anterior">
                </div>
                <div class="form-group">
                    <input name="passNew" type="password" class="form-control" id="formGroupExampleInput2" placeholder="nueva contraseña">
                </div>
                <div class="form-group">
                    <input name="passNew2" type="password" class="form-control" id="formGroupExampleInput2" placeholder="confirme su contraseña">
                </div>
                <div class="d-flex justify-content-end">
                <button name=id type="submit" class="btn btn-outline-secondary" value={{$idAdmin}}>Cambiar</button>

                </div>
            </form>

        </div>
        </div>

</div>
@endsection
