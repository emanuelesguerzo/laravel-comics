<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- SASS --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>@yield('titolo-pagina')</title>
</head>

<body>
    {{-- Header --}}
    @include('partials.header')

    {{-- Contenuto della pagina --}}
    <main>
        @yield('contenuto')
    </main>

    {{-- Footer --}}
    @include('partials.footer')
</body>

</html>
