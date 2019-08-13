<!DOCTYPE html>
<html>
    <head>
        <link href="/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
        <link href="/css/bootstrap-toggle.min.css" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
        @if (file_exists(public_path($css)))
            <link href="{{ asset($css) }}" rel="stylesheet">
        @endif
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="/js/app.js"></script>
        <script src="/js/bootstrap-toggle.min.js"></script>
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