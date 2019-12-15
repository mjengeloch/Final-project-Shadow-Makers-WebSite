@extends('admin.layouts.default')

@section('content')
    <section id="informations" class="container">
        @if(session()->has('info'))
            <div class="row justify-content-center">
                <div class="notification is-success col-6">
                    {{ session('info') }}
                </div>
            </div>
        @endif
        <div class="row align-items-center title">
            <hr class="col-1">
            <h1 class="col-9">Informations personnelles</h1>
        </div>
        <form action="{{ route('updateInformations') }}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="last_name">{{ __('Nom') }}</label>
                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror"
                           name="last_name" value="{{ old('last_name', $informations->last_name) }}">
                    @error('last_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="first_name">{{ __('Prénom') }}</label>
                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror"
                           name="first_name" value="{{ old('first_name', $informations->first_name) }}">
                    @error('first_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-12">
                    <label for="address">{{ __('Adresse') }}</label>
                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                           name="address" value="{{ old('address', $informations->address) }}">
                    @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="zip">{{ __('Code postal') }}</label>
                    <input id="zip" type="text" class="form-control @error('zip') is-invalid @enderror" name="zip"
                           value="{{ old('zip', $informations->zip) }}">
                    @error('zip')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="city">{{ __('Ville') }}</label>
                    <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city"
                           value="{{ old('city', $informations->city) }}">
                    @error('city')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-12">
                    <label for="shadow_email">{{ __('Email du compte Shadow') }}</label>
                    <input id="shadow_email" type="text"
                           class="form-control @error('shadow_email') is-invalid @enderror" name="shadow_email"
                           value="{{ old('shadow_email', $informations->shadow_email) }}">
                    @error('shadow_email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="telephone_number">{{ __('Numéro de téléphone') }}</label>
                    <input id="telephone_number" type="text"
                           class="form-control @error('telephone_number') is-invalid @enderror" name="telephone_number"
                           value="{{ old('telephone_number', $informations->telephone_number) }}">
                    @error('telephone_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="discord">{{ __('Discord') }}</label>
                    <input id="discord" type="text" class="form-control @error('discord_nickname') is-invalid @enderror"
                           name="discord" value="{{ old('discord', $informations->discord) }}"
                           placeholder="Pseudo#0000">
                    @error('discord_nickname')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row align-items-center title space">
                <hr class="col-1">
                <h1 class="col-9">Informations visibles sur votre page Shadow Makers</h1>
            </div>
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="image">{{ __('Photo de profil') }}</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image"
                           name="image">
                    @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-12">
                    <label for="description">{{ __('Description') }}</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                              id="description">{{ old('description', $informations->description) }}</textarea>
                    <small id="descriptionHelp" class="form-text text-muted">300 caractères max.</small>
                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="twitch">{{ __('Pseudo Twitch') }}</label>
                    <input id="twitch" type="text" class="form-control @error('twitch') is-invalid @enderror"
                           name="twitch" value="{{ old('twitch', $informations->twitch) }}">
                    <small id="twitchHelp" class="form-text text-muted">Uniquement le nom de votre chaîne, pas de
                        lien.</small>
                    @error('twitch')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="mixer">{{ __('Pseudo Mixer') }}</label>
                    <input id="mixer" type="text" class="form-control @error('mixer') is-invalid @enderror" name="mixer"
                           value="{{ old('mixer', $informations->mixer) }}">
                    <small id="mixerHelp" class="form-text text-muted">Uniquement le nom de votre chaîne, pas de
                        lien.</small>
                    @error('mixer')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="youtube">{{ __('ID Youtube') }}</label>
                    <input id="youtube" type="text" class="form-control @error('youtube') is-invalid @enderror"
                           name="youtube" value="{{ old('youtube', $informations->youtube) }}">
                    <small id="youtubeHelp" class="form-text text-muted">Token dans l'URL de votre chaîne
                        (http://youtube.com/channel/<span class="bold">token</span>)</small>
                    @error('youtube')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="website">{{ __('Site Web') }}</label>
                    <input id="website" type="text" class="form-control @error('website') is-invalid @enderror"
                           name="website" value="{{ old('website', $informations->website) }}"
                           placeholder="https://monsiteweb.com">
                    <small id="websiteHelp" class="form-text text-muted">Exemple : https://monsiteweb.com</small>
                    @error('website')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="twitter">{{ __('Pseudo Twitter') }}</label>
                    <input id="twitter" type="text" class="form-control @error('twitter') is-invalid @enderror"
                           name="twitter" value="{{ old('twitter', $informations->twitter) }}">
                    <small id="twitterHelp" class="form-text text-muted">Uniquement votre pseudo, pas de lien, ni de
                        @.</small>
                    @error('twitter')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="instagram">{{ __('Pseudo Instagram') }}</label>
                    <input id="instagram" type="text" class="form-control @error('instagram') is-invalid @enderror"
                           name="instagram" value="{{ old('instagram', $informations->instagram) }}">
                    <small id="instagramHelp" class="form-text text-muted">Uniquement votre pseudo, pas de lien.</small>
                    @error('instagram')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="facebook">{{ __('Nom de votre page Facebook') }}</label>
                    <input id="facebook" type="text" class="form-control @error('facebook') is-invalid @enderror"
                           name="facebook" value="{{ old('facebook', $informations->facebook) }}">
                    <small id="facebookHelp" class="form-text text-muted">Uniquement le nom de votre page, pas de
                        lien.</small>
                    @error('facebook')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="snapchat">{{ __('Pseudo SnapChat') }}</label>
                    <input id="snapchat" type="text" class="form-control @error('snapchat') is-invalid @enderror"
                           name="snapchat" value="{{ old('snapchat', $informations->snapchat) }}" disabled>
                    <small id="snapchatHelp" class="form-text text-muted">Fonction à venir</small>
                    @error('snapchat')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-purple">{{ __('Mettre à jour') }}</button>
            </div>
        </form>
    </section>
@endsection
