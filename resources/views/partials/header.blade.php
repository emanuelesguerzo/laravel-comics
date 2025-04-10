{{-- Prelevo nome rotta corrente --}}
@php
    $current = Route::currentRouteName();
@endphp

{{-- Navbar --}}
<nav class="navbar navbar-expand-lg">

    {{-- Container --}}
    <div class="container d-flex justify-content-between align-items-center">

        {{-- Logo --}}
        <a class="navbar-brand" href="{{ route("home") }}">
            <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
        </a>

        {{-- Toggler (mobile only) --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Navbar Links --}}
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav gap-2">
                <li class="nav-item"><a class="nav-link {{ $current === 'home' ? 'active' : '' }}" href="{{ route("home") }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ $current === 'characters' ? 'active' : '' }}" href="{{ route("characters")}}">Characters</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Comics</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Movies</a></li>
                <li class="nav-item"><a class="nav-link" href="#">TV</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Games</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Collectibles</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Videos</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Fans</a></li>
                <li class="nav-item"><a class="nav-link" href="#">News</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
            </ul>
        </div>

    </div>
</nav>

{{-- Jumbotron --}}
<section class="jumbotron"></section>

{{-- Section Title --}}
<div class="container">
    <div class="series-badge">
        <h1 class="text-white section-title user-select-none">@yield('titolo-sezione')</h1>
    </div>
</div>
