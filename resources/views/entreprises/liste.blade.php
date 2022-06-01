@foreach($entreprises as $entreprise)
    <li>
        <a class="commodites btn3" href="{{route('entreprises.show', $entreprise)}}">
            {{$entreprise->nom}}
        </a>
    </li>
@endforeach