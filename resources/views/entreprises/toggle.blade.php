@foreach($entreprises as $entreprise)
<button class="btn3">
        <a class="commodites" href="{{route('entreprises.show', $entreprise)}}">
            {{$entreprise->nom}}
        </a>
        @if($entreprise->isPopulaire)
        <button data-populaire="{{route('entreprises.togglePopulaire', $entreprise)}}" class="populaire is_populaire">Populaire</button>
        @else
        <button data-populaire="{{route('entreprises.togglePopulaire', $entreprise)}}" class="populaire">Non Populaire</button>
        @endif
    </button >
@endforeach
