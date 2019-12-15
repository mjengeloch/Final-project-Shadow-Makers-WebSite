@extends('admin.layouts.default')

@section('content')
    <section class="container" id="accountCreate">
        <div class="row align-items-center title">
            <hr class="col-1">
            <h1 class="col-9">Créer un compte</h1>
        </div>
        <form action="{{ route('account.store') }}" method="POST" class="form-row">
            @csrf
            <div class="form-group col-12">
                <label for="email">{{ __('Email') }}</label>
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email"
                       value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-12">
                <label for="name">{{ __('Nom') }}</label>
                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name"
                       value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <input type="password" id="password" class="form-control" name="password" value="{{ $password }}"
                   hidden>
            <input type="password" id="password-confirm" class="form-control" name="password_confirmation"
                   value="{{ $password }}" hidden>
            <button type="submit" class="btn btn-purple">{{ __('Créer') }}</button>
        </form>
    </section>

@endsection
