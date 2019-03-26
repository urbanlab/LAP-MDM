@extends('layouts.app')

@section('content')
<div class="container auth">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                  <div class="logo"><img src="{{ url('media/logo.svg') }}">
</div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="input-field col-md-6">
                                <i class="small material-icons prefix">face</i>
                                <input id="icon_prefix email" type="email" class="validate form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                <label for="icon_prefix email" class="col-md-4 col-form-label text-md-left">Identifiant</label>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-field col-md-6">
                              <i class="small material-icons prefix">lock</i>
                              <input id="icon_prefix password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                              <label for="icon_prefix password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col m10">
                              <div class="col m6 push-m1">
                                <button type="submit" class="waves-effect waves-light btn btn-primary">
                                    {{ __('Accéder à mon espace') }}
                                </button>
                              </div>
                              <div class="col m6 button">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié ?') }}
                                    </a>
                                @endif
                              </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
