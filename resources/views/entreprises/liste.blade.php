@foreach($entreprises as $entreprise)
<li>
    <a class="btn3" href="{{route('entreprises.show', $entreprise)}}">
        {{$entreprise->nom}}
    </a>
</li>
@endforeach
