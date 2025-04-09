<nav class="navbar navbar-expand-lg">
    <div class="container d-flex justify-content-between align-items-center">
        {{-- LOGO --}}
        <a class="navbar-brand" href="#">
            <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
        </a>

        {{-- TOGGLER (mobile only) --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- NAVBAR LINKS --}}
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Characters</a></li>
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
