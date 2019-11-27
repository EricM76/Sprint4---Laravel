@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex justify-content-center mt-4">

<div class="col-sm-12 col-md-12 col-lg-8">
    <div class="card ">
        <div class="card-header text-white bg-primary">{{ __('Publicar un Trueke') }}</div>

        <div class="card-body">
            <form action="/publicar" method="POST" enctype="multipart/form-data" id="producto">
             @csrf
                <div class="row">

                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="titulo">Titulo</label>
                            <div class="">
                            <input name="titulo" type="text" placeholder="titulo" class="form-control input-md " value="{{old('titulo')}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label class="control-label" for="valor">Valor</label>
                                <div class="">
                                <input id="valor" name="valor" type="number" placeholder="en truekoins" class="form-control input-md" value="{{old('valor')}}">
                                </div>
                            </div>

                            <div class="form-group col-sm-12 col-md-6">
                                <label for="categoria">Categoria</label>
                                <select class="form-control" id="categoria" name="categoria" value="{{old('categoria')}}">
                                <option selected></option>
                                @foreach ($categorias as $categoria)
                                <option value={{$categoria['id']}}>
                                    {{$categoria['name']}}
                                </option>
                                @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mt-3">
                            <label class="" for="imagen">Subir 3 fotos del producto (formato jpg/jpeg/png)</label>

                            <div class="col-12 custom-file">
                                <input name="imagen1" type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Elija el archivo</label>
                            </div>
                            <div class="col-12 custom-file">
                                <input name="imagen2" type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Elija el archivo</label>
                            </div>
                            <div class="col-12 custom-file">
                                <input name="imagen3" type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Elija el archivo</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea class="form-control" name="descripcion" rows="6" placeholder="" form="producto"></textarea>
                        </div>
                        <div class="text-danger" role="alert">
                            @foreach ($errors->all() as $error)
                            <li class="text-danger small">{{$error}}</li>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <div class="form-group">
                        <div class="">
                        <button value="" class="btn btn-success" name="id" type="submit">Publicar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
