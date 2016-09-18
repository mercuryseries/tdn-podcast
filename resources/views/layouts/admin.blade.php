<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <title>{{ $title or config('app.name') }}</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width:device-width, initial-scale=1.0">

    <!-- Favicons -->
    @include('layouts/partials/_favicons')

    <!-- Normalize CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">

    <!-- Typekit -->
    <script src="https://use.typekit.net/bdw7xbl.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body>
    <div class="border"></div>

    <main class="wrapper">
        <p class="text_center"><a href="{{ route('home') }}">ACCUEIL</a></p>
        @yield('content')
    </main>
</body>
</html>