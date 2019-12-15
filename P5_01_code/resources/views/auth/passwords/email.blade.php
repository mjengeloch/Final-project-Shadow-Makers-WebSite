@extends('front.layouts.default')

@section('content')
    <section class="container" id="email">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="row align-items-center title">
                    <div class="col-1 trait"></div>
                    <h1 class="col-9">Changer le mot de passe</h1>
                </div>
                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="form-row justify-content-center">
                        <div class="form-group col-12">
                            <label for="email">{{__('Email')}}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-purple">{{ __('Envoyer') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
