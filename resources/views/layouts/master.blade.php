<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <script src="{{ mix('js/app.js') }}" defer></script>

    <title>@yield('title')</title>
</head>
<body>
<div class="app" id="app">
        <div class="main-content">
            @yield('main-content')
        </div>
    </div>
</div>

@yield('js')
</body>
</html>
