@extends('front.layouts.default')

@section('content')
    <section id="shadowmakers" class="container">
        <div class="row SM-title">
            <h1 class="col-5 offset-3">Shadow<br/>
                Makers</h1>
            <img src="/images/Photo-Makers.jpg">
        </div>
        <div class="row SM-content justify-content-end">
            <p class="col-7">
                <span class="bold">Et si on regroupait des gens animés d’une même flamme : créer du contenu grâce à Shadow.</span><br/>
                De cette idée, sont nés les Shadow Makers, une sorte d’Avengers de créateurs de contenu : streameurs,
                vidéastes, musiciens, podcasteurs, illustrateurs…<br/>
                Tous ensemble, ils forment cette grande famille des Shadow Makers, le tout menée par Akimi, community
                manager chez Shadow.<br/>
                Le but de cette ligue est de montrer au monde entier et même au-delà… Si jamais les extra-terrestres
                arrivent à capter notre internet… Tout ce qu’on peut faire sur et grâce à Shadow.
            </p>
            <img src="/images/shadow_world.jpg" class="col-3">
        </div>
        <div class="row SM-content align-items-center">
            <img src="/images/streamers.jpg " class="col-3">
            <p class="col-7">
                Certains vous montre à quel point il est facile de faire un top 1 avec un skin banane en jouant sur
                Shadow, nombreux vous emmènent vers les étoiles, et d’autres vous invitent à participer à leurs émission
                au travers d’un talkshow. Il paraît même que quelques-uns partagent leur amour de Shadow au travers de
                streams cuisine !<br/>
                Tout cela dans la bonne humeur la plus totale, parce que les Shadow Makers, c’est avant tout de l’amour
                à n’en plus pouvoir. L’amour de partager Shadow avec vous, d’en discuter, de vous conseiller, de
                s’amuser et d’enfin constater une bonne fois pour toute qu’avec Shadow, on peut faire les choses comme
                sur un PC local et parfois même aller encore plus loin…<br/>
                <span class="bold">Bref, Shadow a ses Avengers, ce sont les Shadow Makers !</span>
            </p>
        </div>
        @include('front.layouts.membersList')
        <img src="/images/laser.png" class="laser">
    </section>
@endsection
