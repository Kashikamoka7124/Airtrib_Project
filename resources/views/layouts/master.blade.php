<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Airtrib</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900%7CPlayfair+Display:400,700,900%7CRoboto+Condensed:300,400,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="/css/airtrib-flatpickr.css" rel="stylesheet">

    @yield('styles')

    <!-- Scripts -->
    <script>
        window.App = {
            stripeKey: @json(config('services.stripe.key')),
            user: @json(auth()->user()),
            session: @json((string) Str::uuid()),
            request: @json(request()->all())
        }
    </script>

    @yield('scripts')

    <!-- <script src="https://js.stripe.com/v3/"></script> -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-merriweather">
    <div id="app">
        @yield('body')

        <flash-message></flash-message>
    </div>
</body>
</html>
