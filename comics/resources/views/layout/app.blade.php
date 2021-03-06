<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>@yield('title', 'Comics')</title>

        <!-- Fonts -->
    </head>
    <body>
        @include('partials.header')
        <main id="site_main">
            @yield('content')
        </main>
        @include('partials.footer')
        
    </body>
</html>
