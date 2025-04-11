{{-- Layout --}}
@extends('layouts.master')

{{-- Titolo Tab Pagina --}}
@section('titolo-pagina' , 'Characters | DC Comics')

{{-- Titolo Sezione Main --}}
@section('titolo-sezione', 'Characters')

{{-- Contenuto Pagina Characters --}}
@section('contenuto')
    <div class="container">
        <div class="row">

            {{-- Ciclo per ogni personaggio --}}
            @foreach ($characters as $character)
                <div class="col col-md-6 col-lg-3 mb-2 mt-4">

                    {{-- Card Personaggio --}}
                    <x-character-card 
                      name="{{ $character['name'] }}" 
                      description="{{ $character['description'] }}"
                      image="{{ $character['image'] }}" 
                    />
                    
                </div>
            @endforeach
        </div>
    </div>
@endsection
