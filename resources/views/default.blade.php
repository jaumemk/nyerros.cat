<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Colla castellera Nyerros de la Plana</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('app.css')}}">
    </head>
    <body>
        @include('includes/header')
        @yield('content')
        @include('includes.footer')
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
