@extends('mesLayouts.layout')

@section('titre')
Évènements - {{$evenements->nom}}
@endsection

@section('contenu')
<h2>Évènement {{$evenements->nom}}</h2>
    <form action="{{route('evenements.update', $evenements)}}" method="post">
        @include('evenements.form')
        <x-champ-button type="submit" titre="'Modifier l'évènement'"></x-champ-button>
    </form>
    <div class="options">
        <x-champ-lien href="{{route('evenements.index')}}" titre="Retour aux évènements"></x-champ-lien>
    </div>
@endsection