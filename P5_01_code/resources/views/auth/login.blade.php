@extends('front.layouts.default')

@section('content')
    <section class="container" id="login">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="row align-items-center title">
                    <div class="col-1 trait"></div>
                    <h1 class="col-9">Login</h1>
                </div>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-row justify-content-center">
                        <div class="form-group col-12">
                            <label for="email" class="">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label for="password" class="">{{ __('Mot de passe') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">{{ __('Se souvenir') }}</label>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-purple">{{ __('Connexion') }}</button>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">{{ __('Mot de passe oublié') }}</a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
