                @foreach($entreprises as $entreprise)
    <li>
        <button class="btn3">
            <a href="{{route('entreprises.show', $entreprise)}}">
                {{$entreprise->nom}}
            </a>
        </button>
    </li>
@endforeach