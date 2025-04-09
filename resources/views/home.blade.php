@extends("layouts.master")

@section("titolo-pagina")
    Home
@endsection

@section("contenuto")
<section class="jumbotron"></section>

<div class="series-badge">
  <h4 class="text-white">Current Series</h4>
</div>

<div class="container">
    <h1>Home</h1>

    <div class="row">
        <div class="col">
            <x-card>
        <x-slot:titolo>
            Titolo Card
        </x-slot>
    </x-card>
        </div>
    </div>
</div>
    
    
@endsection
