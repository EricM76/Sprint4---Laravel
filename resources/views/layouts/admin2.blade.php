<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SocialTruek') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="/js/admin2.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

        <!-- Styles -->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="/css/fontawesome.css">
        <link rel="stylesheet" href="/css/all.css">
        <link rel="stylesheet" href="/css/solid.css">
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="/css/posteo.css">
        <link rel="stylesheet" href="/css/posteo2.css">
        <link rel="stylesheet" href="/css/imagenEdit.css">
        <link rel="stylesheet" href="/css/uploadImagen.css">
        <link rel="stylesheet" href="/css/mensajes.css">
        <link rel="stylesheet" href="/css/admin2.css">
    </head>
<body>
    <div class="content">
        <div class="colors">
            <a class="default" href="javascript:void(0)"></a>
            <a class="blue" href="javascript:void(0)"></a>
            <a class="green" href="javascript:void(0)"></a>
            <a class="red" href="javascript:void(0)"></a>
            <a class="white" href="javascript:void(0)"></a>
            <a class="black" href="javascript:void(0)"></a>
        </div>
        <div id="jquery-accordion-menu" class="jquery-accordion-menu">
            <div class="jquery-accordion-menu-header">Header </div>
            <ul>
                <li class="active"><a href="#"><i class="fa fa-home"></i>Home </a></li>
                <li><a href="#"><i class="fa fa-glass"></i>Events </a></li>
                <li><a href="#"><i class="fa fa-file-image-o"></i>Gallery </a><span class="jquery-accordion-menu-label">12 </span></li>
                <li><a href="#"><i class="fa fa-cog"></i>Services </a>
                    <ul class="submenu">
                        <li><a href="#">
                        Web Design </a></li>
                        <li><a href="#">Hosting </a></li>
                        <li><a href="#">Design </a>
                            <ul class="submenu">
                                <li><a href="#">Graphics </a></li>
                                <li><a href="#">Vectors </a></li>
                                <li><a href="#">Photoshop </a></li>
                                <li><a href="#">Fonts </a></li>
                            </ul>
                        </li>
                        <li><a href="#">Consulting </a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-newspaper-o"></i>News </a></li>
                <li><a href="#"><i class="fa fa-suitcase"></i>Portfolio </a>
                    <ul class="submenu">
                        <li><a href="#">Web Design </a></li>
                        <li><a href="#">Graphics </a><span class="jquery-accordion-menu-label">10 </span></li>
                        <li><a href="#">Photoshop </a></li>
                        <li><a href="#">Programming </a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-user"></i>About </a></li>
                <li><a href="#"><i class="fa fa-envelope"></i>Contact </a></li>
            </ul>
            <div class="jquery-accordion-menu-footer">Footer </div>
        </div>
    </div>
</body>
</html>
