@extends('layouts.app')
<style>
@font-face{
    font-family: Nunito;
    src: url(../fonts/Nunito-Regular.ttf);
}
</style>
@section('content')
<div class="container-fluid d-flex justify-content-center">

        <div class="col-sm-12 col-md-10 col-lg-6">
            <div class="card ">
                <div class="card-header text-white bg-primary">{{ __('Registro de Usuario') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                               <p class="invalid-feedback" id="errorNombr"></p>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-8">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}"  autocomplete="surname" autofocus>
                                 <p class="invalid-feedback" id="errorAp"></p>
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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">
                                <p class="invalid-feedback" id="errorEmail"></p>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                                 <p class="invalid-feedback" id="errorContra"></p>

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                                 <p class="invalid-feedback" id="errorConCon"></p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birth" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>

                            <div class="col-md-4">
                                <input id="birth" type="date" class="form-control @error('birth') is-invalid @enderror" name="birth" value="{{ old('birth') }}"  autocomplete="birth" autofocus>
                                  <p class="invalid-feedback" id="errorDate"></p>

                                @error('birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input id="code" type="text" class="form-control @error('password') is-invalid @enderror" name="code" required value="codigo validador" hidden>

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            @if ($_GET)
                                <script>
                                var code = document.getElementById('code');
                                code.removeAttribute('hidden','false');
                                </script>
                            @endif



                        </div>

                        <div class="form-group row mb-0 d-flex justify-content-end">
                            <div class="col-md-5 offset-md-4">
                                <button id="btn" type="submit" class="btn btn-outline-primary">
                                    {{ __('Registrarse') }}
                                </button>
                                <script>
                                    var btn = document.getElementById('btn');
                                    btn.setAttribute('class','btn btn-secondary');
                                </script>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</div>
@endsection

@section('js')
  <script src="js/register.js" type="application/javascript">

  </script>
@endsection
