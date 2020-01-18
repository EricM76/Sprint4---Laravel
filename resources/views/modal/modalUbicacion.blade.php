<div class="modal fade" id="ubicacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" onload="mapa.initMap()">

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk7DaloVrcQYh25UegCc460Fh46uniE24&callback=initMap" async defer></script>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ubicacion de {{$productos->user->name." ".$productos->user->surname}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <input id="ciudad" type="text" value="{{$productos->user->city}}" hidden>
                <input id="provincia" type="text" value="{{$productos->user->state}}" hidden>
                <div id="map" style="width:100%; height:300px"></div>
                <div><p id="coordenadas"></p></div>

                @include('/apis/apiGeoLocalizacion')

            </div>

        </div>
    </div>
</div>
