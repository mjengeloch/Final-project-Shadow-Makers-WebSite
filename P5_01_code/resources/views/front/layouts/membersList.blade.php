<div class="row justify-content-center membersList">
    <hr class="separation col-6">
    <h2 class="col-12">Nos Shadow Makers</h2>
    <div class=" col-10 list">
        <div class="row">
            @foreach($membersList as $member)
                @if($member['name'] != 'shadowmakers')
                    <a class="col-2" href="/shadowmakers/{{$member['name']}}">
                        @if($member['image'] != null)
                            <img src="/images/profil/{{$member['image']}}">
                        @else
                            <img src="/images/profil/shadowmakersfr.jpg">
                        @endif
                        <p class="label">{{$member['name']}}</p>
                        <i class="fas fa-info-circle more-information"></i>
                    </a>
                @endif
            @endforeach
        </div>
    </div>
</div>


