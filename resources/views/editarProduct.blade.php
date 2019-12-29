@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex justify-content-center mt-1">

<div class="col-sm-12 col-md-12 col-lg-8">
    <div class="card ">
        <div class="card-header text-white bg-primary">{{ __('Editar Publicación') }}</div>

        <div class="card-body">
            <form action="/editarProduct" method="POST" enctype="multipart/form-data" id="producto">
             @csrf
                <div class="row px-5">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="titulo">Titulo</label>
                            <div class="">
                            <input name="titulo" type="text" class="form-control input-md " value="{{$producto->title}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label class="control-label" for="valor">Valor</label>
                                <div class="">
                                <input id="valor" name="valor" type="number" placeholder="en truekoins" class="form-control input-md" value="{{$producto->value}}">
                                </div>
                            </div>

                            <div class="form-group col-sm-12 col-md-6">
                                <label for="categoria">Categoria</label>
                                <select class="form-control" id="categoria" name="categoria" value="{{$producto->categoria_id}}">
                                <option selected></option>
                                @foreach ($categorias as $categoria)
                                <option value={{$categoria['id']}}>
                                    {{$categoria['name']}}
                                </option>
                                @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="row">
                                <label for="descripcion">Descripcion</label>
                        <textarea class="form-control" name="descripcion" rows="5" placeholder="{{$producto->description}}" form="producto" cols="20">{{$producto->description}}</textarea>
                            </div>
                            <div class="text-danger" role="alert">
                                @foreach ($errors->all() as $error)
                                <li class="text-danger small">{{$error}}</li>
                                @endforeach
                            </div>

                    </div>

                    </div>


                <div class="row px-5 pt-3">
                    <div class="col-4 pb-4">
                        <img class="img-fluid" src="/storage/images/products/{{$producto->image1}}" alt="">
                    </div>
                    <div class="col-4 pb-4">
                        <img class="img-fluid" src="/storage/images/products/{{$producto->image2}}" alt="">
                    </div>
                    <div class="col-4 pb-4">
                        <img class="img-fluid" src="/storage/images/products/{{$producto->image3}}" alt="">
                    </div>
                </div>

                <div class="d-flex justify-content-end mx-4">
                    <button value={{$producto->id}} class="btn btn-primary" name="id" type="submit">Guardar cambios</button>

                </div>
            </form>
        </div>
    </div>
</div>

@endsection
