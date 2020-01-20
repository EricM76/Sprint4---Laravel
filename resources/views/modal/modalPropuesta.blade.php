@extends('layouts.app')

@section('content')

<script src="/js/modal.js"></script>
<script type="text/javascript">

    $( document ).ready(function() {
        $('#staticBackdrop').modal('show')
    });
     </script>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Ofrezco mi <strong>{{$mensaje->ProductOrigin->title}}</strong> por </h5>
                <a href="/cuenta?id=nav-misPropuestas-tab"><button type="button"><span aria-hidden="true">&times;</span>
                </button></a>

            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row" id="ads">
                        <!-- Category Card -->
                        <div class="col-md-12">
                            <div class="card rounded">
                                <div class="card-image">
                                    <span class="card-notify-badge">{{$mensaje->ProductDestinity->value}} Truekoins</span>
                                    <img id="marco" class="img-fluid" src="/storage/images/products/{{$mensaje->ProductDestinity->image1}}" alt="Alternate Text" />
                                </div>
                                <div class="card-body text-center">
                                    <div class="ad-title m-auto">
                                        <h5>{{$mensaje->ProductDestinity->title}}</h5>
                                    </div>
                                    <div id="info" hidden>
                                        <div class="row">
                                            <div class="col-4">
                                                <a href=""> <img id="img1" class="img-fluid" src="/storage/images/products/{{$mensaje->ProductDestinity->image1}}" alt=""></a>
                                            </div>
                                            <div class="col-4">
                                                <a href=""> <img id="img2" class="img-fluid" src="/storage/images/products/{{$mensaje->ProductDestinity->image2}}" alt=""></a>
                                            </div>
                                            <div class="col-4">
                                                <a href=""> <img id="img3" class="img-fluid" src="/storage/images/products/{{$mensaje->ProductDestinity->image3}}" alt=""></a>
                                            </div>
                                        </div>
                                        {{$mensaje->ProductDestinity->description}}

                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <a id="botonInfo" class="ad-btn" href="#">+ info</a>
                                        <a id="botonInfo2" class="ad-btn" href="#" hidden>- info</a>
                                        <a class="ad-btn2" href="/desistirPropuesta/{{$mensaje->id}}">Desistir Truekeo</a>
                                    </div>
                                    <script>
                                        var marco = document.getElementById('marco');
                                        var info = document.getElementById('info');
                                        var botonInfo = document.getElementById('botonInfo');
                                        var botonInfo2 = document.getElementById('botonInfo2');
                                        var img1 = document.getElementById('img1');
                                        var img2 = document.getElementById('img2');
                                        var img3 = document.getElementById('img3');
                                        botonInfo.onclick = function(){
                                            info.removeAttribute('hidden')
                                            botonInfo2.removeAttribute('hidden');
                                            botonInfo.setAttribute('hidden','true');
                                        }
                                        botonInfo2.onclick = function(){
                                            info.setAttribute('hidden','true');
                                            botonInfo2.setAttribute('hidden','true');
                                            botonInfo.removeAttribute('hidden');
                                        }
                                        img1.onclick = function(){
                                            event.preventDefault();
                                            marco.setAttribute('src','/storage/images/products/{{$mensaje->ProductDestinity->image1}}')
                                        }
                                        img2.onclick = function(){
                                            event.preventDefault();
                                            marco.setAttribute('src','/storage/images/products/{{$mensaje->ProductDestinity->image2}}')
                                        }
                                        img3.onclick = function(){
                                            event.preventDefault();
                                            marco.setAttribute('src','/storage/images/products/{{$mensaje->ProductDestinity->image3}}')
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

@endsection
