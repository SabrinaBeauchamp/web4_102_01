<h1>GroupeCommodite</h1>
@foreach($groupesCommodite as $groupeCommodite)
    <a href="{{route('groupesCommodite.show', ['groupeCommodite' => $groupeCommodite])}}">
        {{$groupeCommodite->nom}} <br>
    </a>
@endforeach
<a href="{{route('groupesCommodite.create')}}">Ajouter</a>