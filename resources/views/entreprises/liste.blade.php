@foreach($entreprises as $entreprise)
<li>
    <a class="btn3 commodites" href="{{route('entreprises.show', $entreprise)}}">
        {{$entreprise->nom}}
    </a>
</li>
@endforeach
