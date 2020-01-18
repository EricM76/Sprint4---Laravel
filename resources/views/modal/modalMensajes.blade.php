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
                                        <a class="ad-btn2" href="/rechazarMensaje/{{$mensaje->id}}">Rechazar</a>
                                        <a class="ad-btn3" href="/aceptarMensaje/{{$mensaje->id}}">Aceptar</a>
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
