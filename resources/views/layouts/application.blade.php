<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <title>{{ $title or config('app.name') }}</title>
    <meta charset="UTF-8">

    <meta name="viewport" content="width:device-width, initial-scale=1.0">

    <!-- Favicons -->
    @include('layouts/partials/_favicons')

    <!-- Normalize CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- Plyr -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/plyr/2.0.7/plyr.css">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">

    <!-- Typekit -->
    <script src="https://use.typekit.net/bdw7xbl.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body>
    <div class="border"></div>

    @include('layouts/partials/_header')

    <main class="wrapper">
        @yield('content')
    </main>

    <!-- Plyr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/plyr/2.0.7/plyr.js"></script>
    <script>plyr.setup();</script>
</body>
</html>