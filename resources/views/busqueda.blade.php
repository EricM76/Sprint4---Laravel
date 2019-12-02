@extends('layouts.app')

@section('content')

  <section class="mt-3">

      <div class="container-fluid mt-3">

         <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">producto</th>
              <th scope="col">titulo</th>
              <th scope="col">descripcion</th>
              <th scope="col">valor</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($productos as $producto)
            <td>
              <a href="">
                  <img class="pic-1" src="/storage/images/products/{{$producto['image1']}}" width="150px">
              </a>
              </td>
              <td>{{$producto['title']}}></td>
              <td>{{$producto['description']}}</td>
              <td>{{$producto['value']}}</td>
            </tr>
              @endforeach
          </tbody>
         </table>
         </div>
      </section>
    @endsection
