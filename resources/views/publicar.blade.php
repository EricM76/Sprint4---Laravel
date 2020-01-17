@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex justify-content-center mt-4">

<div class="col-sm-12 col-md-12 col-lg-8">
    <div class="card ">
        <div class="card-header text-white bg-primary">{{ __('Publicar un Trueke') }}</div>

        <div class="card-body">
            <script>

            </script>
            <form action="/publicar" method="POST" enctype="multipart/form-data" id="producto" name="formulario">
             @csrf
                <div class="row">

                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="titulo">Titulo</label>
                            <div class="">

                            <input name="titulo" type="text" placeholder="titulo" class="form-control input-md @error('titulo') is-invalid @enderror" value="{{old('titulo')}}" onkeyup="checkform()" id="titulo">
                            @error('titulo')
                            <p id="error1" class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label class="control-label" for="valor">Valor</label>
                                <div class="">
                                <input id="valor" name="valor" type="number" placeholder="en truekoins" class="form-control input-md @error('valor') is-invalid @enderror" value="{{old('valor')}}" onkeyup="checkform()" id="valor">
                                @error('valor')
                                <p id="error2" class="text-danger small">{{$message}}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group col-sm-12 col-md-6">
                                <label for="categoria">Categoria</label>
                                <select class="form-control @error('categoria') is-invalid @enderror" id="categoria" name="categoria" value="" onkeyup="checkform()">
                                <option selected></option>
                                @foreach ($categorias as $categoria)
                                <option value={{$categoria['id']}}>
                                    {{$categoria['name']}}
                                </option>
                                @endforeach
                                </select>

                                @error('categoria')
                                <p id="error3" class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-3">
                            <label class="" for="imagen">Subí 3 fotos del producto (formato jpg/jpeg/png)</label>

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
                                            <input class="custom-file-input @error('imagen1') is-invalid @enderror" id="file-upload" type="file" accept="image/*" name="imagen1" onkeyup="checkform()"/>
                                            <label class="custom-file-label" for="customFile"></label>
                                            @error('imagen1')
                                            <p id="error4" class="text-danger small">{{$message}}</p>
                                            @enderror
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
                                            fileUpload.setAttribute('class','custom-file-input is-valid')
                                            error4.textContent = ""
                                        };
                                    </script>
                                </div>

                                <div class="col-4 pb-4">
                                    <div id="divInputLoad">
                                        <div id="file-preview-zone2">
                                            <img class="img-fluid" src="" alt="" id="file-preview2">
                                        </div>

                                        <div class="custom-file" id="divFileUpload">
                                            <input class="custom-file-input @error('imagen2') is-invalid @enderror" id="file-upload2" type="file" accept="image/*" name="imagen2" onkeyup="checkform()"/>
                                            <label class="custom-file-label" for="customFile"></label>
                                            @error('imagen2')
                                            <p id="error5" class="text-danger small">{{$message}}</p>
                                            @enderror
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
                                            fileUpload2.setAttribute('class','custom-file-input is-valid')
                                            error5.textContent = ""
                                        };
                                    </script>
                                </div>

                                <div class="col-4 pb-4">
                                    <div id="divInputLoad">
                                        <div id="file-preview-zone3">
                                            <img class="img-fluid" src="" alt="" id="file-preview3">
                                        </div>

                                        <div class="custom-file" id="divFileUpload">
                                            <input class="custom-file-input @error('imagen3') is-invalid @enderror" id="file-upload3" type="file" accept="image/*" name="imagen3" onkeyup="checkform()"/>
                                            <label class="custom-file-label" for="customFile"></label>
                                            @error('imagen3')
                                            <p id="error6" class="text-danger small">{{$message}}</p>
                                            @enderror
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
                                            fileUpload3.setAttribute('class','custom-file-input is-valid')
                                            error6.textContent = ""
                                        };
                                    </script>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea id="descripcion" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" rows="6" placeholder="" form="producto" onkeyup="checkform()" id="titulo">{{old('descripcion')}}</textarea>
                        @error('descripcion')
                        <p id="error7" class="text-danger small">{{$message}}</p>
                        @enderror
                        </div>
                        <div class="row">
                            <div class="col-4 text-right">
                                <h6 class="text-body"><strong>Me interesa truekear por:</strong> </h6>
                                <h6 class="text-small text-secondary">(selecionar una o más categorias)</h6>
                            </div>
                            <div class="col-8">
                                <select class="custom-select @error('intereses') is-invalid @enderror" multiple name="intereses[]" onclick="marcar(this);checkform()" required>
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
                                 @error('intereses')
                                 <p id="error8" class="text-danger small">{{$message}}</p>
                                 @enderror
                            </div>
                        </div>

                    </div>
                </div>

                <div class="d-flex justify-content-end mt-2">
                    <div class="form-group">
                        <div class="">
                        <button id="enviar" value="" class="btn btn-success" name="id" type="submit" disabled>Publicar</button>
                        </div>
                    </div>

                    <script lang="javascript">
                    //capturo todo el formulario
                    var formulario = document.forms[2];
                    //capturo todos los elementos
                    var elementos = formulario.elements;
                    //capturo los elementos por separado
                    var titulo = elementos[1];
                    var valor = elementos[2];
                    var categoria = elementos[3];
                    var imagen1 = elementos[4];
                    var imagen2 = elementos[5];
                    var imagen3 = elementos[6];
                    var descripcion = elementos[7];
                    var interes = elementos[8];
                    var error1 = document.getElementById('error1');
                    var error2 = document.getElementById('error2');
                    var error3 = document.getElementById('error3');
                    var error4 = document.getElementById('error4');
                    var error5 = document.getElementById('error5');
                    var error6 = document.getElementById('error6');
                    var error7 = document.getElementById('error7');
                    var error8 = document.getElementById('error8');

                    var enviar = document.getElementById('enviar');

                        titulo.onchange = function(){

                                titulo.setAttribute('class','form-control is-valid')
                                error1.textContent = ""
                        }
                        if (titulo.value.length > 0){
                            titulo.setAttribute('class', 'form-control is-valid')
                        }

                        valor.onchange = function(){

                                valor.setAttribute('class','form-control is-valid')
                                error2.textContent = ""
                        }
                        if (valor.value.length > 0){
                            valor.setAttribute('class', 'form-control is-valid')
                        }

                        categoria.onchange = function(){

                                categoria.setAttribute('class','form-control is-valid')
                                error3.textContent = ""
                        }
                        if (categoria.value.length > 0){
                            categoria.setAttribute('class', 'form-control is-valid')
                        }

                        descripcion.onchange = function(){
                            // if (descripcion.value.length != 0){
                                descripcion.setAttribute('class','form-control is-valid')
                                error7.textContent = ""
                            // }
                        }
                        if (descripcion.value.length > 0){
                            descripcion.setAttribute('class', 'form-control is-valid')
                        }

                        interes.onchange = function(){
                            // if (descripcion.value.length != 0){
                                interes.setAttribute('class','form-control is-valid')
                                error8.textContent = ""
                            // }
                        }
                        if (interes.value.length > 0){
                            interes.setAttribute('class', 'form-control is-valid')
                        }

                        function checkform()
                            {
                                var f = document.forms['formulario'].elements;
                                // var f = document.getElementById('titulo');

                                var cansubmit = 1;
                                console.log(cansubmit)
                                for (var i = 1; i < (f.length-1); i++) {
                                    console.log(f[i].value)
                                    if (f[i].value.length == 0) cansubmit = 0;
                                    console.log(cansubmit)
                                }

                                if (cansubmit == 1) {
                                    document.getElementById('enviar').disabled = false;
                                }
                            }
                    </script>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
