@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="css/posteo2.css">
  <div class="container">
    <div class="card mt-1 pt-4">
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
      <p class="product-description">{{$productos->description}} </p>
      <h4 class="price"><span>{{$productos->value}}</span></h4>

      <div class="action">
        <button class="add-to-cart btn btn-default" type="button">contactar</button>
        <button class="like btn btn-default" type="button"><span class="fa fa-star"></span></button>
      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection
