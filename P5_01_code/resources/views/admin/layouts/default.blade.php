@php
    use Illuminate\Support\Facades\Auth;
    $userAuth = Auth::user();
@endphp
    <!doctype html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description"
          content="Et si on regroupait des gens animés d’une même flamme : créer du contenu grâce à Shadow. Streameurs, vidéastes, musiciens, podcasteurs, illustrateurs.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('images/favicons/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicons/favicon.png') }}" type="image/png">
    <link rel="icon" sizes="32x32" href="{{ asset('images/favicons/favicon-32.png') }}" type="image/png">
    <link rel="icon" sizes="64x64" href="{{ asset('images/favicons/favicon-64.png') }}" type="image/png">
    <link rel="icon" sizes="96x96" href="{{ asset('images/favicons/favicon-96.png') }}" type="image/png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700,700i&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>

<body>
@include('admin.layouts.navigation')
@yield('content')
@include('admin.layouts.footer')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://kit.fontawesome.com/31d8dde4e9.js" crossorigin="anonymous"></script>
<script async src="https://tenor.com/embed.js"></script>
</body>
</html>

