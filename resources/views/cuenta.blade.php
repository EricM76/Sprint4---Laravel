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
    <div class=" col-sm-12 col-md-12 col-lg-10">
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

 <script>
        var state = document.getElementById('state');
        var provinciaInput = document.getElementById('provincia');
        var provinciasSelect = document.getElementById('provincias');

        fetch('https://apis.datos.gob.ar/georef/api/provincias') //la direccion donde está la api

        .then(function(provincias) //recibe los datos que vienen de la pagina antes invocada
            {
                return provincias.json() // retorna los datos pasados a json
            })

        .then(function(arrayProvincias) //pasa el objeto a un array
            {

                var todasProvincias = arrayProvincias.provincias

                function ordenarAsc(p_array_json, p_key)
                {
                p_array_json.sort(function (a, b) {
                    return a[p_key] > b[p_key];
                });
                }
                ordenarAsc(todasProvincias,'nombre');

                for (provincia of todasProvincias)
                {
				var optionProvincia = document.createElement('option') //crea el elemento
				provinciasSelect.appendChild(optionProvincia)
                optionProvincia.setAttribute('value',provincia.nombre)
                optionProvincia.setAttribute('id','opProv')
				var nombreProvincia = document.createTextNode(provincia.nombre)
				optionProvincia.appendChild(nombreProvincia)
				}
			})

        state.onclick = function()
        {
            if (provinciaInput.style.display != 'none') {
                provinciaInput.style.display = 'none';
                provinciasSelect.style.display = 'block';
            } else {
                provinciaInput.style.display = 'block';
                provinciasSelect.style.display = 'none';
            }

        }

        provincia.onclick = function()
        {
            provinciaInput.style.display = 'none';
            provinciasSelect.style.display = 'block';
        }

        provinciasSelect.onchange = function()
        {
            var optionProvincia = provinciasSelect.options[provinciasSelect.selectedIndex].value;
            var provinciaSel = optionProvincia
            provinciaInput.setAttribute('value', provinciaSel)
            provinciaInput.style.display = 'block';
            provinciasSelect.style.display = 'none';

            var select = document.getElementById("localidades");

            for (let i = select.options.length; i >= 0; i--) {
                select.remove(i);
            }

            console.log(select)

    fetch('https://apis.datos.gob.ar/georef/api/localidades?formato=json&max=5000') //la direccion donde está la api

    .then(function(localidades) //recibe los datos que vienen de la pagina antes invocada
        {
            return localidades.json() // retorna los datos pasados a json
        })
    .then(function(arrayLocalidades) //pasa el objeto a un array
        {
            var arrayCompleto = arrayLocalidades.localidades
            // console.log(todasLocalidades[0].provincia.nombre)
            var provincia = document.getElementById('provincia'); //atrapo el input
            var provincia = provincia.value; //atrapo el valor del input
            var ciudades = new Array(); //creo un nuevo array

            for (localidad of arrayCompleto) //recorro el array que viene de la api
            {
                if(localidad.provincia.nombre == provincia) //chequeo que la localidad corresponda con la provincia
                {
                    ciudades.push(localidad.nombre) //voy agregando en el nuevo array las ciudades
                }
            }
            ciudades.sort(); //ordeno el array

            for (ciudad of ciudades) { //recorro el array para formar las opciones del select
                var optionLocalidad = document.createElement('option') //crea el elemento
                localidadesSelect.appendChild(optionLocalidad) //añade el option al select
                optionLocalidad.setAttribute('value',ciudad)
                var nombreLocalidad = document.createTextNode(ciudad)
                optionLocalidad.appendChild(nombreLocalidad)
            }

        })
        }
</script>

<script>
    var state = document.getElementById('city');
    var localidadInput = document.getElementById('localidad');
    var localidadesSelect = document.getElementById('localidades');

    fetch('https://apis.datos.gob.ar/georef/api/localidades?formato=json&max=5000') //la direccion donde está la api

    .then(function(localidades) //recibe los datos que vienen de la pagina antes invocada
        {
            return localidades.json() // retorna los datos pasados a json
        })
    .then(function(arrayLocalidades) //pasa el objeto a un array
        {
            var arrayCompleto = arrayLocalidades.localidades
            // console.log(todasLocalidades[0].provincia.nombre)
            var provincia = document.getElementById('provincia'); //atrapo el input
            var provincia = provincia.value; //atrapo el valor del input
            var ciudades = new Array(); //creo un nuevo array

            for (localidad of arrayCompleto) //recorro el array que viene de la api
            {
                if(localidad.provincia.nombre == provincia) //chequeo que la localidad corresponda con la provincia
                {
                    ciudades.push(localidad.nombre) //voy agregando en el nuevo array las ciudades
                }
            }
            ciudades.sort(); //ordeno el array

            for (ciudad of ciudades) { //recorro el array para formar las opciones del select
                var optionLocalidad = document.createElement('option') //crea el elemento
                localidadesSelect.appendChild(optionLocalidad) //añade el option al select
                optionLocalidad.setAttribute('value',ciudad)
                var nombreLocalidad = document.createTextNode(ciudad)
                optionLocalidad.appendChild(nombreLocalidad)
            }

        })

    city.onclick = function()
    {
        if (localidadInput.style.display != 'none') {
            localidadInput.style.display = 'none';
            localidadesSelect.style.display = 'block';
        } else {
            localidadInput.style.display = 'block';
            localidadesSelect.style.display = 'none';
        }

    }

    localidad.onclick = function()
    {
        localidadInput.style.display = 'none';
        localidadesSelect.style.display = 'block';
    }

    localidadesSelect.onchange = function()
    {

        var optionLocalidad = localidadesSelect.options[localidadesSelect.selectedIndex].value;
        var localidadSel = optionLocalidad
        localidadInput.setAttribute('value', localidadSel)
        localidadInput.style.display = 'block';
        localidadesSelect.style.display = 'none';
    }

</script>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-12">

                                        <div class="row">
                                            <div class="col-4  p-2">
                                                <div id="map" style="width:100%; height:300px"></div>
            <div><p id="coordenadas"></p></div>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk7DaloVrcQYh25UegCc460Fh46uniE24&callback=initMap" async defer></script>

        <script>

           function initMap()
           {
               // Creamos el objeto geodecoder
                var geocoder = new google.maps.Geocoder();
                address = document.getElementById('direccion').value + ', ' + document.getElementById('localidad').value + ', ' + document.getElementById('provincia').value;

                    // Llamamos a la función geodecode pasandole la dirección que hemos introducido en la caja de texto.
                    geocoder.geocode({ 'address': address}, function(results, status)
                    {
                        if (status == 'OK')
                        {
                            var lat = results[0].geometry.location.lat();
                            var lng = results[0].geometry.location.lng();
                            const options = {
                center:{
                    lat: lat,
                    lng: lng
                    },
                zoom:11,

                    }
                var map = document.getElementById('map');
                const mapa = new google.maps.Map(map,options)
                var marker = new google.maps.Marker({
                position:{
                    lat: lat,
                    lng: lng
                },
                map: mapa
                })
                        }
                    })


            };
        </script>

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
                        <div class="card-columns">
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
                                  {{-- <a href="" onclick="event.preventDefault();preguntar({{$posteo->id}})"> <button class="btn btn-sm btn-outline-danger">Eliminar</button></a>
                                    <script lang="javascript">
                                        function preguntar($id)
                                        {
                                            if (confirm('¿Estás seguro que deseas eliminar la publicación?')) {
                                                location.href = '/eliminarProduct/{{$posteo->id}}'
                                            }
                                        }
                                    </script> --}}
                                  </div>
                                </div>
                              </div>
                            @endforeach
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
                                        <!-- Team member -->
                                        @foreach ($mensajes as $mensaje)
                                        <div class="col-4">
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
                                        @endforeach
                                    </div>
                                </div>
                            </section>


                                   <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5>Truekeo tu <strong>{{$mensaje->ProductDestinity->title}}</strong> por </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="row" id="ads">
                                                        <!-- Category Card -->
                                                        <div class="col-md-12">
                                                            <div class="card rounded">
                                                                <div class="card-image">
                                                                    <span class="card-notify-badge">{{$mensaje->ProductOrigin->value}} Truekoins</span>
                                                                    <img class="img-fluid" src="storage/images/products/{{$mensaje->ProductOrigin->image1}}" alt="Alternate Text" />
                                                                </div>
                                                                <div class="card-body text-center">
                                                                    <div class="ad-title m-auto">
                                                                        <h5>{{$mensaje->ProductOrigin->title}}</h5>
                                                                    </div>
                                                                    <div class="d-flex justify-content-center">
                                                                        <a class="ad-btn" href="/detalleproducto/{{$mensaje->ProductOrigin->id}}">Más info</a>
                                                                        <a class="ad-btn2" href="/detalleproducto/{{$mensaje->ProductOrigin->id}}">Rechazar</a>
                                                                        <a class="ad-btn3" href="#">Aceptar</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>




                    <div class="tab-pane fade" id="nav-propuestas" role="tabpanel" aria-labelledby="nav-misPropuestas-tab">
                        @if (isset($sinPropuestas))
                        <div class="d-flex justify-content-center">
                            <h5 class="alert-danger p-2"><i class="fas fa-hand-point-right mr-1"></i> {{$sinPropuestas}}</h5>
                        </div>
                        @endif
                        <div class="row">
                            @foreach ($propuestas as $propuesta)
                            <div class="card m-2" style="width: 100%;">
                                <div class="row p-3">
                                    <div class="col-6">
                                        <img src="storage/images/products/{{$propuesta->ProductDestinity->image1}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">TRUEKEAR</p>

                                        <h5 class="card-title">{{$propuesta->ProductDestinity->title}}</h5>
                                        <hr>
                                          <p class="card-text h5">de {{$propuesta->UserDestinity->name}}</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <img src="storage/images/products/{{$propuesta->ProductOrigin->image1}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">por mi</p>
                                        <h5 class="card-title">{{$propuesta->ProductOrigin->title}}</h5>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <a href="/rechazarMensaje/{{$propuesta->id}}" class="btn-sm btn-danger">Desistir</a>
                                        </div>

                                    </div>
                                </div>

                                  </div>
                            @endforeach
                        </div>


                    {{-- <div id="map" style="width:100%; height:300px">

                        </div>

                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk7DaloVrcQYh25UegCc460Fh46uniE24&callback=initMap" async defer></script>

                        <script>
                        class Localizacion {
                            constructor(callback){
                                if (navigator.geolocation) {
                                    navigator.geolocation.getCurrentPosition((position)=>{
                                        this.latitude = position.coords.latitude;
                                        this.longitude = position.coords.longitude;
                                        callback();
                                    });
                                } else {
                                    alert('tu navegador no soporta geolocalización :(')
                                }
                            }
                        }
                       function initMap(){
                           const ubicacion = new Localizacion(()=>{
                               const options = {
                                center:{
                                    lat: ubicacion.latitude,
                                    lng: ubicacion.longitude
                                },
                                zoom:15,
                               }
                            var map = document.getElementById('map');
                            const mapa = new google.maps.Map(map,options)
                            var marker = new google.maps.Marker({
                                position:{
                                    lat: ubicacion.latitude,
                                    lng: ubicacion.longitude
                                },
                                map: mapa
                            })

                           });
                       }


                        </script> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('layouts.profile')
@endsection
