@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex justify-content-center mt-1">

<div class="col-sm-12 col-md-12 col-lg-8">
    <div class="card ">
        <div class="card-header text-white bg-primary">{{ __('Editar Publicación') }}</div>

        <div class="card-body">
            <form action="/editarProduct" method="POST" id="producto" enctype="multipart/form-data">
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
                                <select class="form-control" id="categoria" name="categoria">
                                <option selected value="{{$producto->categoria_id}}">{{$producto->category->name}}</option>
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
                        <div id="divInputLoad">
                            <div id="file-preview-zone">
                                <script>
                                window.onload = function(){
                                    var fileUpload = document.getElementById('file-upload');
                                    fileUpload.value = null;
                                    var fileUpload2 = document.getElementById('file-upload2');
                                    fileUpload2.value = null;
                                    var fileUpload3 = document.getElementById('file-upload3');
                                    fileUpload3.value = null;
                                }
                                </script>
                                 <img class="img-fluid" src="/storage/images/products/{{$producto->image1}}" alt="" id="file-preview">
                            </div>

                            <div class="custom-file" id="divFileUpload">
                                <input class="custom-file-input" id="file-upload" type="file" accept="image/*" name="image1"/>
                                <label class="custom-file-label" for="customFile"></label>
                            </div>
                        </div>
                        <script lang="javascript">

                                function readFile(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function (e) {
                                        var filePreview = document.getElementById('file-preview')
                                        filePreview.src = e.target.result;
                                        console.log(e.target.result);
                                        var previewZone = document.getElementById('file-preview-zone');
                                        previewZone.appendChild(filePreview);
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                            var fileUpload = document.getElementById('file-upload');
                            fileUpload.onchange = function (e) {
                                readFile(e.srcElement);
                            };
                        </script>
                    </div>

                    <div class="col-4 pb-4">
                        <div id="divInputLoad">
                            <div id="file-preview-zone2">
                                <img class="img-fluid" src="/storage/images/products/{{$producto->image2}}" alt="" id="file-preview2">
                            </div>

                            <div class="custom-file" id="divFileUpload">
                                <input class="custom-file-input" id="file-upload2" type="file" accept="image/*" name="image2"/>
                                <label class="custom-file-label" for="customFile"></label>
                            </div>
                        </div>
                        <script lang="javascript">

                                function readFile2(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function (e) {
                                        var filePreview2 = document.getElementById('file-preview2')
                                        filePreview2.src = e.target.result;
                                        console.log(e.target.result);
                                        var previewZone2 = document.getElementById('file-preview-zone2');
                                        previewZone2.appendChild(filePreview2);
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                            var fileUpload2 = document.getElementById('file-upload2');
                            fileUpload2.onchange = function (e) {
                                readFile2(e.srcElement);
                            };
                        </script>
                    </div>

                    <div class="col-4 pb-4">
                        <div id="divInputLoad">
                            <div id="file-preview-zone3">
                                <img class="img-fluid" src="/storage/images/products/{{$producto->image3}}" alt="" id="file-preview3">
                            </div>

                            <div class="custom-file" id="divFileUpload">
                                <input class="custom-file-input" id="file-upload3" type="file" accept="image/*" name="image3"/>
                                <label class="custom-file-label" for="customFile"></label>
                            </div>
                        </div>
                        <script lang="javascript">

                                function readFile3(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function (e) {
                                        var filePreview3 = document.getElementById('file-preview3')
                                        filePreview3.src = e.target.result;
                                        console.log(e.target.result);
                                        var previewZone3 = document.getElementById('file-preview-zone3');
                                        previewZone3.appendChild(filePreview3);
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                            var fileUpload3 = document.getElementById('file-upload3');
                            fileUpload3.onchange = function (e) {
                                readFile3(e.srcElement);
                            };
                        </script>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 ml-5">
                        <div class="">
                            <h5 class="mr-2">Trukea por: </h5>
                            @foreach ($categorias as $categoria)
                            @foreach ($intereses as $interes)
                            @if ($categoria->name == $interes)
                            <span class="badge badge-pill badge-primary mx-1" id="interes">{{$interes}}</span>
                            @endif
                            @endforeach
                            @endforeach
                        </div>

                    </div>

              </div>
              <div class="text-right mr-5">

                <a href="/cuenta?id=nav-profile-tab"><button class="btn-sm btn-secondary" name="id" type="button">Cancelar</button></a>
                <button value={{$producto->id}} class="btn-sm btn-primary ml-2" name="id" type="submit">Guardar</button>
            </div>

            </form>
        </div>
    </div>
</div>

@endsection
