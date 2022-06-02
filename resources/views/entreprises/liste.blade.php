@foreach($entreprises as $entreprise)
    <button class="btn3">
        <a class="commodites" href="{{route('entreprises.show', $entreprise)}}">
            {{$entreprise->nom}}
        </a>
    </button>
@endforeach