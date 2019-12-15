<div id="streamers-block" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @for($k = 0; $k < ceil(count($membersStates)/5); $k++)
            <li data-target="#streamers-block" data-slide-to="{{$k}}" class="@if($k == 0) active @endif"></li>
        @endfor
    </ol>
    <div class="carousel-inner">
        @php $streamerCount = 0 @endphp
        @for($i = 0; $i < ceil(count($membersStates) / 5); $i++)
            <div class="carousel-item @if($i == 0) active @endif">
                @for($j = $streamerCount; $j < min($streamerCount + 5, count($membersStates)); $j++)
                    @php $member = $membersStates[$j]; @endphp
                    <div class="streamer">
                        <div class="cercle @if($member['state']['data'] != null) online @endif"></div>
                        <div class="cropper">
                            <a href="/streamer/{{$member['twitch']}}">
                                @if($member['image'] !== null)
                                    <img src="/images/profil/{{ $member['image'] }}" alt="{{ $member['twitch'] }}">
                                @else
                                    <img src="/images/profil/shadowmakersfr.jpg" alt="{{ $member['twitch'] }}">
                                @endif
                            </a>
                        </div>
                    </div>
                @endfor
                @php $streamerCount += 5; @endphp
            </div>
        @endfor
    </div>
</div>
