{{-- Character Card Component --}}
<div class="card character-card text-white d-flex flex-column h-100">

    {{-- Character Image --}}
    <img class="character-img mb-3" src="{{ $image }}" class="card-img-top" alt="{{ $name }}">
    
    {{-- Card Body --}}
    <div class="card-body d-flex flex-column">
        
      {{-- Character Name --}}
        <h5 class="card-title character-name text-center fs-2 my-3">
          {{ $name }}
        </h5>

        {{-- Character Description --}}
        <p class="card-text text-center character-description py-2">
          {{ $description }}
        </p>

        {{-- Learn More Button --}}
        <a href="#" class="learn-more-btn">
          Scopri di più
        </a>
        
    </div>
</div>
