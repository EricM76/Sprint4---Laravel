@extends('layouts.app')

@section('content')

<script>
  window.onload = function(){
    // mapa = {}

    };
</script>
<div class="container ">
    <div class="card2 mt-1 pt-4">
      <div class="container-fluid">
        <div class="wrapper row">
          <div class="preview col-sm-12 col-md-12 col-lg-6 ">

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
      {{-- <div class="rating">
        <div class="stars">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
        </div>
        <span class="review-no">visto 16 veces</span>
      </div> --}}
      <h4 class="price"><span>{{$productos->value}} truekoins</span></h4>
      <p class="product-description">{{$productos->description}} </p>
      <p class="text-secondary">publicado por</p>

      <img class="img-fluid" src="/storage/images/avatar/{{$productos->user->profile}}" alt="" width="50px">
      <h4 class=""> {{$productos->user->name." ".$productos->user->surname}}</h4>
      <div>
        <h5>{{$productos->user->city}}, {{$productos->user->state}}</h5> <a href="" data-toggle="modal" data-target="#ubicacion">ver ubicacion</a>
      </div>

        <!-- Modal -->
        @include('/modal/modalUbicacion')

      <div class="text-left mt-3">
      <h6 class="mr">Le interesa truekear por: </h6>
          @foreach ($intereses as $interes)
            <h4 class="badge badge-warning mx-1">{{$interes}}</h4>
          @endforeach
      </div>
      <div class="mt-3">
          <button id="propone" class="btn-sm btn-success">Proponer truekeo</button>
          <button id="cancela" class="btn-sm btn-secondary" hidden>Cancelar</button>
          <button id="denuncia" class="btn-sm btn-danger" type="button">Denunciar publicacion</button>

      </div>
        <div class="mt-3" id="truekeo" hidden>
          <div class="d-flex justify-content-start">
            <h5 class="mr-2" >Elije la categoría: </h5>
            @foreach ($intereses as $interes)
            <a href="/intereses/{{$interes}}/{{$productos->id}}"><span class="badge badge-primary mx-1">{{$interes}}</span></a>
            @endforeach
          </div>
        </div>
      <script>
        var propone = document.getElementById('propone');
        var cancela = document.getElementById('cancela');
        var truekeo = document.getElementById('truekeo');
        propone.onclick = function(){
            truekeo.removeAttribute('hidden');
            cancela.removeAttribute('hidden');
            propone.setAttribute('hidden','true');
        };
        cancela.onclick = function(){
            truekeo.setAttribute('hidden','true');
            propone.removeAttribute('hidden');
            cancela.setAttribute('hidden','true');
        };
      </script>


  @if (isset($regInteres) && $regInteres->isNotEmpty())
      <div id="table">
  <table class="table">
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
                    <input type="radio" name="truekeo" id="checkbox" value="{{$registro->id}}" checked>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <button class="btn-sm btn-success" type="submit" name="producto" value={{$productos->id}}>Proponer truekeo</button>

        </div>
        </form>
    </div>
        <script>
            var propone = document.getElementById('propone');
            var cancela = document.getElementById('cancela');
            var truekeo = document.getElementById('truekeo');
            var table = document.getElementById('table')
            cancela.removeAttribute('hidden');
            propone.setAttribute('hidden','true');
            propone.onclick = function(){
                truekeo.removeAttribute('hidden');
                cancela.removeAttribute('hidden');
                propone.setAttribute('hidden','true');
            };
            cancela.onclick = function(){
                truekeo.setAttribute('hidden','true');
                table.setAttribute('hidden','true');
                propone.removeAttribute('hidden');
                cancela.setAttribute('hidden','true');
            };
          </script>
     @endif
     @if (isset($regInteres) && $regInteres->isEmpty())
     <h5 class="alert-danger mt-3">no tenés publicado ningún producto que corresponda a esa categoría</h5>
     @endif


    </div>
  </div>
</div>
</div>
</div>

@endsection
