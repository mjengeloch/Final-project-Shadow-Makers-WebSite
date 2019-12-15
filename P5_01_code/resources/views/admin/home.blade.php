@extends('admin.layouts.default')

@section('content')
    <section id="adminHome" class="container">
        <div class="row align-items-center title">
            <hr class="col-1">
            <h1 class="col-9">Panneau d'administration</h1>
        </div>
        <div class="row">
            <p class="col-12">Bienvenu sur votre panneau d'administration. D'ici vous pourrez ajouter et/ou modifier
                votre mot de
                passe, nom d'utilisateur, mail et vos informations pour votre page personnel.<br/>
                <span class="bold">Plus vous metterez vos informations à jour régulièrement, plus vous aurez de visibilité et moins de risques d'avoir des liens morts.</span>
            </p>
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="tenor-gif-embed col-4" data-postid="8225006" data-share-method="host" data-width="100%"
                         data-aspect-ratio="1.6116504854368932">
                        <a href="https://tenor.com/view/the-house-the-house-gifs-jason-mantzoukas-greetings-gif-8225006">Welcome!
                            GIF</a> from <a href="https://tenor.com/search/jasonmantzoukas-gifs">Jasonmantzoukas
                            GIFs</a>
                    </div>
                </div>
            </div>
            <h2 class="col-12">Liens utiles</h2>
            <ul class="ulLevelOne">
                <li class="levelOne">
                    <a href="https://docs.google.com/spreadsheets/d/1LOXKFhbnjwNNm_SWeVMN9lorvWe4pVAfoTUR3nFKZiQ/edit#gid=0"
                       target="_blank">Shadow Makers</a>
                    <ul class="ulLevelTwo">
                        <li class="levelTwo">
                            <a href="https://docs.google.com/spreadsheets/d/1LOXKFhbnjwNNm_SWeVMN9lorvWe4pVAfoTUR3nFKZiQ/edit#gid=1407203155"
                               target="_blank">Guide du débutant</a></li>
                        <li class="levelTwo">
                            <a href="https://docs.google.com/spreadsheets/d/1LOXKFhbnjwNNm_SWeVMN9lorvWe4pVAfoTUR3nFKZiQ/edit#gid=210928278"
                               target="_blank">La MEA</a></li>
                        <li class="levelTwo">
                            <a href="https://docs.google.com/spreadsheets/d/1LOXKFhbnjwNNm_SWeVMN9lorvWe4pVAfoTUR3nFKZiQ/edit#gid=512984753"
                               target="_blank">Répertoire</a></li>
                    </ul>
                </li>
                <li class="levelOne">
                    <a href="https://docs.google.com/spreadsheets/d/1mnCsTT7OtpJSVRbWgNHmJFHzSqIqgkuWUm7IOJwW6vE/edit#gid=115551394"
                       target="_blank">WebTV</a>
                    <ul class="ulLevelTwo">
                        <li class="levelTwo">
                            <a href="https://docs.google.com/spreadsheets/d/1mnCsTT7OtpJSVRbWgNHmJFHzSqIqgkuWUm7IOJwW6vE/edit#gid=1563834291"
                               target="_blank">Planning</a>
                        </li>
                        <li class="levelTwo">
                            <a href="https://docs.google.com/spreadsheets/d/1mnCsTT7OtpJSVRbWgNHmJFHzSqIqgkuWUm7IOJwW6vE/edit#gid=2013806778"
                               target="_blank">Les comptes de jeux</a></li>
                    </ul>
                </li>
                <li class="levelOne"><a href="https://trello.com/shadowmakers2" target="_blank">Trello</a></li>
                <li class="levelOne"><a href="https://drive.google.com/drive/folders/1XtKWXT9Z407lyKI41mMGlGEQIHA65OEd"
                                        target="_blank">Pôle Graphique</a></li>
            </ul>
        </div>
    </section>
@endsection
