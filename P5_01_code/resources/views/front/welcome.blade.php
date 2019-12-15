@extends('front.layouts.default')

@section('content')
    <section id="home" class="container">
        @include('front.layouts.streamerList')
        <div id="twitch-player">
            <div id="infos">
                @if($resultsTwitch['data'] == null)
                    <div class="row align-items-center title offline">
                        <hr class="col-1">
                        <h1 class="col-9">
                            @if($displayedMember->twitch !== 'shadowmakersfr')
                                <span class="bold">{!! $displayedMember->twitch !!}</span> –
                            @endif
                            Offline</h1>
                    </div>
                @else
                    <div class="row align-items-center title">
                        <hr class="col-1">
                        <h1 class="col-9">
                            @if($resultsTwitch['data']['0']->user_name !== 'ShadowMakersFR')
                                <span class="bold">{!! $resultsTwitch['data']['0']->user_name !!}</span>
                            @endif
                            @if($infoGame['data'] != null && $resultsTwitch['data']['0']->user_name !== 'ShadowMakersFR')
                                –
                            @endif
                            @if($infoGame['data'] != null)
                                {!! $infoGame['data']['0']->name !!}
                            @endif
                        </h1>
                    </div>
                    <div class="row">
                        <h2 id="titre-stream">{!! $resultsTwitch['data']['0']->title !!}</h2>
                        <div id="viewer" class="row ml-auto align-items-center">
                            <i class="fas fa-users"></i>
                            <h2>{!! $resultsTwitch['data']['0']->viewer_count !!}</h2>
                        </div>
                    </div>
                @endif
            </div>
            <div class="row">
                <iframe id="player" class="col-9"
                        @if($displayedMember->twitch !== 'shadowmakersfr')
                        src="https://player.twitch.tv/?channel={{ $displayedMember->twitch }}&autoplay=true"
                        @else
                        src="https://player.twitch.tv/?channel=shadowmakersfr&autoplay=true"
                        @endif
                        allowfullscreen="allowfullscreen">
                </iframe>
                <iframe id="chat" class="col-3"
                        @if($displayedMember->twitch !== 'shadowmakersfr')
                        src="https://www.twitch.tv/embed/{{ $displayedMember->twitch }}/chat?darkpopout">
                    @else
                        src="https://www.twitch.tv/embed/shadowmakersfr/chat?darkpopout">
                    @endif
                </iframe>
            </div>
        </div>
        <div id="youtube-block">
            <div class="row align-items-center title">
                <hr class="col-1">
                <h1 class="col-10"><span class="bold">Youtube</span></h1>
            </div>
            <div class="row">
                <div id="user" class="col-1">
                    <div class="cropper">
                        <a href="https://www.youtube.com/channel/{{$channelId}}"><img
                                @if($channelId == 'UCZiNGnLceGfM_8tXvsa5sgQ')
                                src="/images/profil/shadowmakersfr.jpg"
                                @else
                                src="/images/profil/{{$displayedMember->image}}"
                                @endif
                                alt="{{$displayedMember->twitch}}"></a>
                    </div>
                </div>
                @foreach($reponse['items'] as $video)
                    <div class="col yt-videos">
                        <div class="thumb">
                            <img src="{{$video['snippet']['thumbnails']['high']['url']}}" alt="" class="thumb">
                        </div>
                        <a href="https://www.youtube.com/watch?v={{$video['id']['videoId']}}">
                            <div class="text-opacity">
                                <p>{!!$video['snippet']['title']!!}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
                <a id="next" class="col-1 align-items-center" href="https://www.youtube.com/channel/{{$channelId}}"><i
                        class="fas fa-plus"></i></a>
            </div>
        </div>
    </section>

    <script src="https://embed.twitch.tv/embed/v1.js"></script>
@endsection
