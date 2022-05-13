<h2>Groupes</h2>
@foreach($groupes as $groupe)
<ul>
    <li>
        <a href="{{route('groupes.show', ['groupe'=>$groupe])}}">{{$groupe['nom']}}</a>
        @include("categories.liste", ['categories'=>$groupe->categories])
    </li>
</ul>
@endforeach
<a href="{{route('groupes.create')}}">Ajouter un groupe</a>