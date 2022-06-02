@extends('mesLayouts.layout')
@section('titre')
<h1>GroupeCommodite</h1>
@endsection
@section('contenu')
@foreach($groupesCommodite as $groupeCommodite)
    <a  class="commodites" href="{{route('groupesCommodite.show', ['groupeCommodite' => $groupeCommodite])}}">
        {{$groupeCommodite->nom}} <br>
    </a>
@endforeach
<a class="boutonUniforme" href="{{route('groupesCommodite.create')}}">Ajouter</a>
@endsection