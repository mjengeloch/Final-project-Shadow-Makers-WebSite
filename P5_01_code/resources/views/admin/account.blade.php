@extends('admin.layouts.default')

@section('content')
    <section id="account" class="container">
        @if(session()->has('info'))
            <div class="row justify-content-center">
                <div class="notification is-success col-6">
                    {{ session('info') }}
                </div>
            </div>
        @endif
        <div class="row align-items-center title">
            <hr class="col-1">
            <h1 class="col-9">Compte</h1>
        </div>
        <form action="{{ route('updateAccount') }}" method="POST" class="form-row">
            @csrf
            <div class="form-group col-6">
                <label for="name">{{ __('Nom') }}</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                       value="{{ Auth::user()->name }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                       name="email" value="{{ Auth::user()->email }}" autocomplete="email">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="password">{{ __('Mot de passe') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                       name="password" autocomplete="new-password">
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="password-confirm">{{ __('Confirmez le mot de passe') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                       autocomplete="new-password">
            </div>
            <button type="submit" class="btn btn-purple">{{ __('Mettre à jour') }}</button>
        </form>
    </section>
@endsection
