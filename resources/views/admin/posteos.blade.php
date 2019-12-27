@extends('layouts.admin')

@section('content')
<div class="container row m-3">
   <div class="col-4">
    <div class="card mx-2 my-2" style="width: 20em;">
        <div class="row p-2">
            <div class="col-6">
                <img src="/storage/images/avatar/{{$usuario['profile']}}" class="" alt="..." width="120px">
            </div>
            <div class="col-6 p-3">
            {{-- <a href="/admin.posteos/{{$usuario->id}}" class="">Posteos</a> --}}
                <a href="#" class="">Truekes</a>
                <a href="#" class="">Contactos</a>
                <a href="#" class="">Valoracion</a>
            </div>

        </div>

            <div class="card-body">
            <h5 class="card-title">{{$usuario->name." ".$usuario->surname}} </h5>
            <p class="text-small">{{$usuario->email}}</p>
            <h6 class="text-black-50">Home: </h6>
                <p class="text-small">{{$usuario->home}}</p>
                <hr>
                <h6 class="text-black-50">Phone: </h6>
                <p class="text-small">{{$usuario->phone}}</p>
                <hr>
                <h6 class="text-black-50">Mobile: </h6>
                <p class="text-small">{{$usuario->mobile}}</p>
            </div>

        </div>
   </div>
   <div class="col-8">
    {{-- <div class="table-responsive-md"> --}}
    <table class="table" style="width:130%">
        <thead class="thead-dark">
          <tr>
            <th scope="col-1">#</th>
            <th scope="col-2">imagen</th>
            <th scope="col-4">titulo</th>
            <th scope="col-1">valor</th>
            <th scope="col-3">descripcion</th>
            <th scope="col-1">categoria</th>
            <th scope="col-1">fecha</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
            <th scope="row">{{$producto->id}}</th>
            <td><img class="img" src="/storage/images/products/{{$producto->image1}}" alt="" width="150px"></td>
                <td>{{$producto->title}}</td>
                <td>{{$producto->value}}</td>
            <td>{{$producto->description}}</td>

            <td>{{$producto->category->name}}</td>

            <td>{{$producto->date}}</td>


            </tr>
            @endforeach

        </tbody>
      </table>
    {{-- </div> --}}
   </div>
</div>
@endsection
