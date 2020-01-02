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

                            <div class="row px-1 pt-3">

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
                                             <img class="img-fluid" src="" alt="" id="file-preview">
                                        </div>

                                        <div class="custom-file" id="divFileUpload">
                                            <input class="custom-file-input" id="file-upload" type="file" accept="image/*" name="imagen1"/>
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
                                            <img class="img-fluid" src="" alt="" id="file-preview2">
                                        </div>

                                        <div class="custom-file" id="divFileUpload">
                                            <input class="custom-file-input" id="file-upload2" type="file" accept="image/*" name="imagen2"/>
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
                                            <img class="img-fluid" src="" alt="" id="file-preview3">
                                        </div>

                                        <div class="custom-file" id="divFileUpload">
                                            <input class="custom-file-input" id="file-upload3" type="file" accept="image/*" name="imagen3"/>
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
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea class="form-control" name="descripcion" rows="6" placeholder="" form="producto"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                {{-- @foreach ($categorias as $categoria)
                                <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck{{$categoria->id}}">
                                    <label class="custom-control-label" for="customCheck{{$categoria->id}}">{{$categoria->name}}</label>
                                </div>
                                @endforeach --}}
                                <select class="custom-select" multiple name="intereses[]" onclick="marcar(this)">
                                    onclick="marcar(this)"
                                    @foreach ($categorias as $categoria)
                                    <option value={{$categoria->name}}>{{$categoria->name}}</option>
                                    @endforeach
                                </select>
                                <script>
                                    todos = new Array();
                                    function marcar(s) {
                                    cual=s.selectedIndex;
                                        for(y=0;y<s.options.length;y++){
                                            if(y==cual){
                                            s.options[y].selected=(todos[y]==true)?false:true;
                                            todos[y]=(todos[y]==true)?false:true;
                                            }
                                            else{
                                            s.options[y].selected=todos[y];
                                            }
                                        }
                                    }
                                </script>
                            </div>
                            <div class="text-danger" role="alert">
                                @foreach ($errors->all() as $error)
                                <li class="text-danger small">{{$error}}</li>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

                <div class="d-flex justify-content-end mt-2">
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
