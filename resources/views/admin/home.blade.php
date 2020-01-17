@extends('layouts.admin')

@section('content')
<div class="container" style="height:72vh">
    <div class="row my-4 p-2 bg-white" style="box-shadow: 5px 5px 5px 5px gray">
        <div class="col-md-3 col-sm-6 mt-1">
            <div class="product-grid6">
                <div class="product-image6 p-2">
                    <a href="/admin.users">
                        <img class="pic-1" src="/images/usuarios.jpg" style="height:15em" >
                    </a>
                </div>
                <div class="product-content">
                <h3 class="title"><a href=""></a>Usuarios</h3>
                <div class="price"> SocialTruek</div>
                <div><p class="text-secondary">registro de usuarios</p></div>
                </div>
                <ul class="social">
                    <li><a href="" data-tip="buscar"><i class="fa fa-search"></i></a></li>
                    <li><a href="" data-tip="recientes"><i class="fa fa-user-plus"></i></a></li>
                    <li><a href="" data-tip="estadisticas"><i class="fa fa-chart-line"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mt-1">
            <div class="product-grid6">
                <div class="product-image6 p-2">
                    <a href="/admin.categorias">
                        <img class="pic-1" src="/images/categorias.png" style="height:15em">
                    </a>
                </div>
                <div class="product-content">
                <h3 class="title"><a href=""></a>Categorias</h3>
                <div class="price"> SocialTruek</div>
                <div><p class="text-secondary">categorizacion de productos</p></div>
                </div>
                <ul class="social">
                    <li><a href="" data-tip="solicitadas"><i class="fa fa-praying-hands"></i></a></li>
                    <li><a href="" data-tip="agregar"><i class="fa fa-tasks"></i></a></li>
                    <li><a href="" data-tip="estadisticas"><i class="fa fa-chart-line"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 mt-1">
            <div class="product-grid6">
                <div class="product-image6 p-2">
                    <a href="">
                        <img class="pic-1" src="/images/posteos.jpg" style="height:15em">
                    </a>
                </div>
                <div class="product-content">
                <h3 class="title"><a href=""></a>Publicaciones</h3>
                <div class="price"> SocialTruek</div>
                <div><p class="text-secondary">disponibilidad de productos</p></div>
                </div>
                <ul class="social">
                    <li><a href="" data-tip="buscar"><i class="fa fa-search"></i></a></li>
                    <li><a href="" data-tip="denunciados"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="estadisticas"><i class="fa fa-chart-line"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 mt-1">
            <div class="product-grid6">
                <div class="product-image6 p-2">
                    <a href="">
                        <img class="pic-1" src="/images/truekes.png" style="height:15em">
                    </a>
                </div>
                <div class="product-content">
                <h3 class="title"><a href=""></a>Truekes</h3>
                <div class="price"> SocialTruek</div>
                <div><p class="text-secondary">cantidad de usuarios</p></div>
                </div>
                <ul class="social">
                    <li><a href="" data-tip="en proceso"><i class="fa fa-route"></i></a></li>
                    <li><a href="" data-tip="finalizados"><i class="fa fa-handshake"></i></a></li>
                    <li><a href="" data-tip="estadisticas"><i class="fa fa-chart-line"></i></a></li>

                </ul>
            </div>
        </div>

    </div>

    </div>


@endsection
