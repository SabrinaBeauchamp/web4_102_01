@foreach($entreprises as $entreprise)
<ul>
    <li>
        <a href="{{route('entreprises.show', $entreprise)}}">
            {{$entreprise->nom}}
        </a>
        @if($entreprise->isPopulaire)
        <button data-populaire="{{route('entreprises.togglePopulaire', $entreprise)}}" class="populaire is_populaire">Populaire</button>
        @else
        <button data-populaire="{{route('entreprises.togglePopulaire', $entreprise)}}" class="populaire">Non Populaire</button>
        @endif
    </li>
</ul>
@endforeach