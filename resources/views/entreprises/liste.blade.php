@foreach($entreprises as $entreprise)
    <a class="btn3" href="{{route('entreprises.show', $entreprise)}}">
        {{$entreprise->nom}}
    </a>
@endforeach