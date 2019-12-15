@extends('admin.layouts.default')

@section('content')
    <section class="container" id="accountShow">
        <div class="row align-items-center title">
            <hr class="col-1">
            <h1 class="col-9">Informations de {{ $user->name }}</h1>
        </div>
        <div class="row">
            <p class="col-12">
                <span class="bold">Adresse : </span>
                @if($informations->first_name == null && $informations->last_name == null && $informations->adress == null && $informations->zip == null && $informations->city == null)
                    –
                @else
                    <br/>
                    @if($informations->first_name !== null){{ $informations->first_name }} @endif @if($informations->last_name !== null){{ $informations->last_name }}@endif
                    @if($informations->address !== null)
                        <br/>
                        {{ $informations->address }}
                    @endif
                    @if($informations->zip !== null && $informations->city !== null)
                        <br/>
                        {{ $informations->zip }} {{ $informations->city }}
                    @endif
                @endif
            </p>
            <p class="col-12">
                <span
                    class="bold">Numéro de téléphone : </span>@if($informations->telephone_number !== null){{ $informations->telephone_number }}@else
                    –@endif
            </p>
            <p class="col-12">
                <span
                    class="bold">Email Shadow : </span>@if($informations->shadow_email !== null){{ $informations->shadow_email }}@else
                    –@endif
            </p>
            <p class="col-12">
                <span
                    class="bold">Discord : </span>@if($informations->discord !== null){{ $informations->discord }}@else
                    –@endif
            </p>
        </div>
        <form action="{{ route('account.updateRoles', $user->name) }}" method="POST" class="form-row">
            @csrf
            @foreach($roles as $role)
                <div class="form-check col-12">
                    <input class="form-check-input" type="checkbox" name="roles[]" id="{{ $role->role }}"
                           value="{{ $role->id }}" {{ in_array($role->id, old('roles') ?: $user->roles->pluck('id')->toArray()) ? 'checked' : ''}}>
                    <label class="form-check-label" for="{{ $role->role }}">{{ $role->role }}</label>
                </div>
            @endforeach
            <button type="submit" class="btn btn-purple">{{ __('Enregistrer') }}</button>
        </form>
    </section>
@endsection
