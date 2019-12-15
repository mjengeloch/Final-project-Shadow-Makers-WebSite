@extends('front.layouts.default')

@section('content')
    <section id="member" class="container">
        <div class="row justify-content-center description">
            <div class="col-3">
                @if($informations->image != null)
                    <img src="/images/profil/{{$informations->image}}" class="profil">
                @else
                    <img src="/images/profil/shadowmakersfr.jpg" class="profil">
                @endif
                <h1 class="labelmember">{{$user->name}}</h1>
            </div>
            <div class="col-5">
                <div class="row">
                    <p class="col-12">{{$informations->description}}</p>
                    @if($informations->twitch != null)
                        <a href="https://twitch.tv/{{$informations->twitch}}" class="col-4"><i
                                class="fab fa-twitch"></i>{{$informations->twitch}}</a>
                    @endif
                    @if($informations->mixer != null)
                        <a href="https://mixer.com/{{$informations->mixer}}" class="col-4 mixerGroup"><img
                                src="/images/reseaux/mixer.png" class="mixer">{{$informations->mixer}}</a>
                    @endif
                    @if($youtube['items'] != null)
                        <a href="https://www.youtube.com/channel/{{$informations->youtube}}" class="col-4"><i
                                class="fab fa-youtube"></i>{{$youtube['items']['0']['snippet']['channelTitle']}}</a>
                    @endif
                    @if($informations->website != null)
                        <a href="{{$informations->website}}" class="col-4"><i
                                class="fab fa-globe"></i>{{$informations->website}}</a>
                    @endif
                    @if($informations->twitter != null)
                        <a href="https://twitter.com/{{$informations->twitter}}" class="col-4"><i
                                class="fab fa-twitter"></i>{{$informations->twitter}}</a>
                    @endif
                    @if($informations->instagram != null)
                        <a href="https://instagram.com/{{$informations->instagram}}" class="col-4"><i
                                class="fab fa-instagram"></i>{{$informations->instagram}}</a>
                    @endif
                    @if($informations->facebook != null)
                        <a href="https://www.facebook.com/{{$informations->facebook}}" class="col-4"><i
                                class="fab fa-facebook"></i>{{$informations->facebook}}</a>
                    @endif
                    @if($informations->snapchat != null)
                        <a href="" class="col-4"><i class="fab fa-snapchat"></i>{{$informations->snapchat}}</a>
                    @endif
                </div>
            </div>
        </div>
        @include('front.layouts.membersList')
    </section>
@endsection
