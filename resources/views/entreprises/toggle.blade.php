@foreach($entreprises as $entreprise)
<div class="fiche">
        <a class="commodites" href="{{route('entreprises.show', $entreprise)}}">
            {{$entreprise->nom}}
        </a>
        @if($entreprise->isPopulaire)
        <button data-populaire="{{route('entreprises.togglePopulaire', $entreprise)}}" class="populaire is_populaire fa-solid fa-star "></button>
        @else
        <button data-populaire="{{route('entreprises.togglePopulaire', $entreprise)}}" class="populaire fa-regular fa-star"></button>
        @endif
    </div>
@endforeach
