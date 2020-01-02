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
      <h4 class="">publicado por {{$productos->user->name." ".$productos->user->surname}}</h4>
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
            <td class="text-center"><input type="radio" name="truekeo" id="checkbox" value="{{$registro->id}}"></td>
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
