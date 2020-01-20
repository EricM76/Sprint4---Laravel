<!-- Modal -->
<div class="modal fade" id="propuestas" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Producto de {{$propuesta->userDestinity->name}}</h5>
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
                                    <span class="card-notify-badge">{{$propuesta->ProductDestinity->value}} Truekoins</span>
                                    <img id="marcoPropuesta" class="img-fluid" src="/storage/images/products/{{$propuesta->ProductDestinity->image1}}" alt="">
                                </div>
                                <div class="card-body text-center">
                                    <div class="ad-title m-auto">
                                        <h5>{{$propuesta->ProductDestinity->title}}</h5>
                                    </div>
                                    <div id="infoPropuesta" hidden>
                                        <div class="row">
                                            <div class="col-4">
                                                <a href=""> <img id="imgPropuesta1" class="img-fluid" src="storage/images/products/{{$propuesta->ProductDestinity->image1}}" alt=""></a>
                                            </div>
                                            <div class="col-4">
                                                <a href=""> <img id="imgPropuesta2" class="img-fluid" src="storage/images/products/{{$propuesta->ProductDestinity->image2}}" alt=""></a>
                                            </div>
                                            <div class="col-4">
                                                <a href=""> <img id="imgPropuesta3" class="img-fluid" src="storage/images/products/{{$propuesta->ProductDestinity->image3}}" alt=""></a>
                                            </div>
                                        </div>
                                        {{$propuesta->ProductDestinity->description}}
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <a id="botonInfoPropuesta" class="ad-btn" href="#">+ info</a>
                                        <a id="botonInfoPropuesta2" class="ad-btn" href="#" hidden>- info</a>
                                        <a class="ad-btn2" href="/rechazarMensaje/{{$propuesta->id}}">Rechazar</a>
                                        <a class="ad-btn3" href="/aceptarMensaje/{{$propuesta->id}}">Aceptar</a>
                                    </div>
                                    <script>
                                        var marcoPropuesta = document.getElementById('marcoPropuesta');
                                        var infoPropuesta = document.getElementById('infoPropuesta');
                                        var botonInfoPropuesta = document.getElementById('botonInfoPropuesta');
                                        var botonInfoPropuesta2 = document.getElementById('botonInfoPropuesta2');
                                        var imgPropuesta1 = document.getElementById('imgPropuesta1');
                                        var imgPropuesta2 = document.getElementById('imgPropuesta2');
                                        var imgPropuesta3 = document.getElementById('imgPropuesta3');
                                        botonInfoPropuesta.onclick = function(){
                                            infoPropuesta.removeAttribute('hidden')
                                            botonInfoPropuesta2.removeAttribute('hidden');
                                            botonInfoPropuesta.setAttribute('hidden','true');
                                        }
                                        botonInfo2.onclick = function(){
                                            infoPropuesta.setAttribute('hidden','true');
                                            botonInfoPropuesta2.setAttribute('hidden','true');
                                            botonInfoPropuesta.removeAttribute('hidden');
                                        }
                                        imgPropuesta1.onclick = function(){
                                            event.preventDefault();
                                            marcoPropuesta.setAttribute('src','storage/images/products/{{$propuesta->ProductDestinity->image1}}')
                                        }
                                        imgPropuesta2.onclick = function(){
                                            event.preventDefault();
                                            marcoPropuesta.setAttribute('src','storage/images/products/{{$propuesta->ProductDestinity->image2}}')
                                        }
                                        imgPropuesta3.onclick = function(){
                                            event.preventDefault();
                                            marcoPropuesta.setAttribute('src','storage/images/products/{{$propuesta->ProductDestinity->image3}}')
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
