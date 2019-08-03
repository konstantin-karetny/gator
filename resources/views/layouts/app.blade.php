<!DOCTYPE html>
<html>
    <head>
        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/vnd.microsoft.icon">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-toggle.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">
        <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @if (file_exists(public_path($css)))
            <link href="{{ asset($css) }}" rel="stylesheet">
        @endif
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-toggle.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        @if (file_exists(public_path($js)))
            <script src="{{ asset($js) }}"></script>
        @endif
        <style>

        </style>
        <script>

        </script>
        <title>{{ config('app.name') }}</title>
    </head>
    <body class="{{ $class }}">
        @include('layouts.header')
        @include('layouts.msgs')
        @yield('content')
    </body>
</html>