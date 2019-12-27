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
    <div class="card ">
        <div class="card-header text-white bg-secondary">{{ __('Registro de Administradores') }}</div>

        <div class="card-body">
            <form method="POST" action="{{'/adminReg'}}">
                @csrf
                <div class="form-group row">
                    <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Código Validador') }}</label>

                    <div class="col-md-8">
                        <input id="code" type="text" class="form-control @error('password') is-invalid @enderror" name="code" required >

                        @error('code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fullName" class="col-md-4 col-form-label text-md-right">{{ __('Nombre y Apellido') }}</label>

                    <div class="col-md-8">
                        <input id="fullName" type="text" class="form-control @error('fullName') is-invalid @enderror" name="fullName" value="{{ old('fullName') }}" required autocomplete="fullName" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="userName" class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}</label>

                    <div class="col-md-8">
                        <input id="userName" type="text" class="form-control @error('userName') is-invalid @enderror" name="userName" value="{{ old('userName') }}" required autocomplete="userName" autofocus>

                        @error('surname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electronico') }}</label>

                    <div class="col-md-8">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                    <div class="col-md-8">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                    <div class="col-md-8">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="birth" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>

                    <div class="col-md-8">
                        <input id="birth" type="date" class="form-control @error('birth') is-invalid @enderror" name="birth" value="{{ old('birth') }}" required autocomplete="birth" autofocus>

                        @error('birth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>



                <div class="form-group row mb-0 d-flex justify-content-end">
                    <div class="col-md-5 offset-md-4">
                        <button type="submit" class="btn btn-outline-secondary">
                            Registrarse
                        </button>
                        <!-- <a class="btn btn-link" href="{{'/admin.codes'}}">
                        Codigo
                        </a> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</div>

</body>
</html>
