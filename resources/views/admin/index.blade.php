<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">


    <title>Document</title>
</head>
<body>
<div class="container-fluid d-flex justify-content-center mt-5">
        <div class="col-sm-12 col-md-10 col-lg-6">
            <div class="card">
                <div class="menu card-header text-white bg-secondary" >{{ __('Login Administradores') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ '/admin' }}">
                        @csrf

                        <div class="form-group row">
                            <label for="userName" class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}</label>

                            <div class="col-md-6">
                                <input id="userName" type="userName" class="form-control @error('userName') is-invalid @enderror" name="userName" value="{{ old('userName') }}" required autocomplete="userName" autofocus>

                                @error('userName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <a class="btn btn-link" href="#">
                                {{ __('Olvidó su contraseña?') }}
                                </a>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuerdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">

                                <button id="btn" type="submit" class="btn btn-success">
                                    {{ __('Iniciar Sesión') }}
                                </button>

                                <a class="btn btn-link" href="{{'/adminReg'}}">
                                {{ __('No está registrado?') }}
                                </a>


                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    window.onload = function(){

    }
    </script>
</body>
</html>

