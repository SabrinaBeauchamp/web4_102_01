@foreach($entreprises as $entreprise)
    <li>
        <button class="btn3">
            <a class="commodites" href="{{route('entreprises.show', $entreprise)}}">
                {{$entreprise->nom}}
            </a>
        </button>
    </li>
@endforeach