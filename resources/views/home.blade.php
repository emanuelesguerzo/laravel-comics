@extends('layouts.master')

@section('titolo-pagina')
    Home | DC Comics
@endsection

@section('contenuto')
    <section class="jumbotron">
    </section>

    <div class="container main-content">
        <div class="series-badge">
            <h1 class="text-white">Current Series</h1>
        </div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 gx-4 gy-5">
            @foreach ($comics as $comic)
                <div class="col">
                    <x-card>
                        <img class="comic-thumb" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        <x-slot:titolo>
                            {{ $comic['title'] }}
                        </x-slot>
                    </x-card>
                </div>
            @endforeach

            <button class="more-btn">Load More</button>
        </div>
    </div>

    <div class="banner py-5">
        <div class="container">
            <div class="row row-gap-4 justify-content-between">
                <div class="col-12 col-md-4 col-lg-2 d-flex align-items-center justify-content-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    <span>Digital Comics</span>
                </div>
                <div class="col-12 col-md-4 col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    <span>DC Merchandise</span>
                </div>
                <div class="col-12 col-md-4 col-lg-2 d-flex align-items-center justify-content-center gap-2">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    <span>Subscription</span>
                </div>
                <div class="col-12 col-md-6 col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <span>Comic Shop Locator</span>
                </div>
                <div class="col-12 col-md-6 col-lg-2 d-flex align-items-center justify-content-center gap-2">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    <span>DC Power Visa</span>
                </div>

            </div>
        </div>

    </div>
@endsection
