<footer class="container">
    <div class="row justify-content-center" id="networks">
        <a class="col-1" href="https://twitter.com/ShadowMakersFR">
            <img src="/images/reseaux/twitter.png" alt="Twitter">
        </a>
        <a class="col-1" href="https://www.instagram.com/shadowmakersfr/">
            <img src="/images/reseaux/instagram.png" alt="Instagram">
        </a>
        <a class="col-1" href="https://www.twitch.tv/shadowmakersfr">
            <img src="/images/reseaux/twitch.png" alt="Twitch"></a>
        <a class="col-1" href="https://www.youtube.com/channel/UCZiNGnLceGfM_8tXvsa5sgQ">
            <img src="/images/reseaux/youtube.png" alt="Youtube">
        </a>
        <a class="col-1" href="https://shadow-makers.fr/discord">
            <img src="/images/reseaux/discord.png" alt="Discord">
        </a>
        <a class="col-1" href="https://www.facebook.com/ShadowMakersFr/">
            <img src="/images/reseaux/facebook.png" alt="Facebook">
        </a>
    </div>
    <div class="row" id="map">
        <p class="col-12">
            @if($userAuth->hasRole('Administrateur'))<a href="/administration/listeComptes">Liste des comptes</a> |
            <a href="/administration/creerCompte">Créer un compte</a> |@endif <a
                href="/administration/compte">Compte</a>
            | <a href="/administration/informations">Informations</a> | <a href="{{ route('logout') }}"
                                                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </p>
        <p id="notice" class="col-12">
            <a>Mention légal</a> | Made by Team ShadowMakers
        </p>
    </div>
</footer>
