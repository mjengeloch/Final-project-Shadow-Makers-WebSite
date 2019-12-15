@extends('front.layouts.default')

@section('content')
    <section class="container" id="contact">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="row align-items-center title">
                    <hr class="col-1">
                    <h1 class="col-9">Contact</h1>
                </div>
                <form action="{{ route('contact') }}" method="POST" class="form-row">
                    @csrf
                    <div class="form-group col-6">
                        <input type="text" name="first_name"
                               class="form-control @error('first_name') is-invalid @enderror" id="first_name"
                               value="{{ old('first_name') }}" placeholder="Prénom">
                        @error('first_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <input type="text" name="last_name"
                               class="form-control @error('last_name') is-invalid @enderror" id="last_name"
                               value="{{ old('last_name') }}" placeholder="Nom">
                        @error('last_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <input type="text" name="nickname" class="form-control @error('nickname') is-invalid @enderror"
                               id="nickname" value="{{ old('nickname') }}" placeholder="Pseudo">
                        @error('nickname')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <input type="text" name="discord_nickname"
                               class="form-control @error('discord_nickname') is-invalid @enderror"
                               id="discord_nickname" value="{{ old('discord_nickname') }}" placeholder="Discord#0000">
                        @error('discord_nickname')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-12">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                               id="email" value="{{ old('email') }}" placeholder="Email">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-12">
                        <textarea class="form-control @error('message') is-invalid @enderror" name="message"
                                  id="message" rows="8" placeholder="Votre message">{{ old("message") }}</textarea>
                        @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-12">
                        <div class="boxes">
                            <input type="checkbox" value="" id="box-1" required>
                            <label for="box-1">En cochant cette case, tu acceptes que tes données soient réutilisées
                                pour le traitement de ta demande.*</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-purple">Envoyer</button>
                </form>
            </div>
        </div>
    </section>
@endsection
