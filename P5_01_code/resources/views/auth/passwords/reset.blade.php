@extends('front.layouts.default')

@section('content')
    <section class="container" id="reset">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="row align-items-center title">
                    <div class="col-1 trait"></div>
                    <h1 class="col-9">Mettre à jour le mot de passe</h1>
                </div>
                <form action="{{ route('password.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-row justify-content-center">
                        <div class="form-group col-12">
                            <label for="email">{{ __('Email') }}</label>
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label for="password">{{ __('Mot de passe') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label for="password-confirm">{{ __('Confirmez le mot de passe') }}</label>
                            <input id="password-confirm" type="password" name="password_confirmation" class="form-control" required autocomplete="new-password">
                        </div>
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-purple">{{ __('Mettre à jour le mot de passe') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
