{{-- Layout --}}
@extends('layouts.master')

{{-- Titolo Tab Pagina --}}
@section('titolo-pagina')
    Home | DC Comics
@endsection

{{-- Titolo Sezione Main --}}
@section('titolo-sezione')
    Current Series
@endsection

{{-- Contenuto Pagina Home --}}
@section('contenuto')
    <div class="container main-content">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 p-2 gx-4 gy-5">

            {{-- Ciclo per ogni fumetto --}}
            @foreach ($comics as $comic)
                <div class="col">

                    {{-- Card Fumetto --}}
                    <x-card>
                        
                        <x-slot:immagine>
                            <img class="comic-thumb" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </x-slot>

                        <x-slot:titolo>
                            {{ $comic['title'] }}
                        </x-slot>

                    </x-card>

                </div>
            @endforeach
        </div>
    </div>
@endsection
