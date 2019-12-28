@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-2 ">
    <div class="row  mt-5">
        <div class="col-2 text-center mt-5 p-5">
        <img class="img-fluid" src="/images/{{$categoria->image}}" alt="">
        <h5 class="text-capitalize alert-link mt-3">{{$categoria->name}}</h5>

    </div>
        <div class="col-10">
            <table class="table" style="width:100%">
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
        </div>
    </div>



</div>
@endsection
