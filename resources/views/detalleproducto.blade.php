@extends('layouts.app')

@section('content')
  <!-- <link rel="stylesheet" href="css/posteo2.css"> -->
  <div class="container">
    <div class="card2 mt-1 pt-4">
      <div class="container-fluid">
        <div class="wrapper row">
          <div class="preview col-sm-12 col-md-12 col-lg-6">

            <div class="preview-pic tab-content">
              <div class="tab-pane active" id="pic-1"><img src="/storage/images/products/{{$productos['image1']}}" /></div>
              <div class="tab-pane" id="pic-2"><img src="/storage/images/products/{{$productos['image2']}}" /></div>
              <div class="tab-pane" id="pic-3"><img src="/storage/images/products/{{$productos['image3']}}" /></div>


            </div>

              <ul class="preview-thumbnail nav nav-tabs">
                 <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="/storage/images/products/{{$productos['image1']}}" /></a></li>
                 <li><a data-target="#pic-2" data-toggle="tab"><img src="/storage/images/products/{{$productos['image2']}}" /></a></li>
                 <li><a data-target="#pic-3" data-toggle="tab"><img src="/storage/images/products/{{$productos['image3']}}" /></a></li>
             </ul>

           </div>
    <div class="details col-sm-12 col-md-12 col-lg-6">
      <h3 class="product-title">{{$productos->title}}</h3>
      <div class="rating">
        <div class="stars">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
        </div>
        <span class="review-no">visto 16 veces</span>
      </div>
      <h4 class="price"><span>{{$productos->value}} truekoins</span></h4>
      <h5 class="mt-3">Truekea por:</h5>
      <div>
          @foreach ($intereses as $interes)
      <a href="/intereses/{{$interes}}/{{$productos->id}}"><span class="badge badge-pill badge-primary">{{$interes}}</span></a>
          @endforeach

      </div>
      <p class="product-description">DESCRIPCION: {{$productos->description}} </p>
      <p class="text-secondary">publicado por</p>

      <img class="img-fluid" src="/storage/images/avatar/{{$productos->user->profile}}" alt="" width="50px">
      <h4 class=""> {{$productos->user->name." ".$productos->user->surname}}</h4>
      <div>
        <h5>{{$productos->user->city}}, {{$productos->user->state}}</h5> <a href="" data-toggle="modal" data-target="#ubicacion">ver ubicacion</a>
      </div>


      <script>

          mapa = {


          }
          </script>

      <!-- Modal -->
<div class="modal fade" id="ubicacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" onload="mapa.initMap()">


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
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk7DaloVrcQYh25UegCc460Fh46uniE24&callback=initMap" async defer></script>

        <script>

           function initMap()
           {
               // Creamos el objeto geodecoder
                var geocoder = new google.maps.Geocoder();
                address = document.getElementById('ciudad').value + ', ' + document.getElementById('provincia').value;

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

      </div>
    </div>
  </div>

        <hr>
      <button class="btn-sm btn-danger" type="button">denunciar publicacion</button>

      @if (isset($regInteres))
      <table class="table" id="table">
        <thead>
          <tr>
            <th scope="col">Titulo</th>
            <th scope="col" class="text-center">Valor</th>
            <th scope="col" class="text-center">Agregar</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($regInteres as $registro)
            <tr>
            <td>{{$registro->title}}</td>
            <td class="text-center">{{$registro->value}}</td>
    <form action="/truekeo" method="POST">
        @csrf
            {{-- <td class="text-center"><input type="checkbox" name="trueke{{$registro->id}}" id="checkbox" value="{{$registro->id}}"></td> --}}
            <td class="text-center">
                <input type="radio" name="truekeo" id="checkbox" value="{{$registro->id}}">
            </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <button class="btn-sm btn-success" type="submit" name="producto" value={{$productos->id}}>proponer truekeo</button>
    </form>
      @endif

    </div>
  </div>
</div>
</div>
</div>

@endsection
