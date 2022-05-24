@extends('mesLayouts.layout')

@section('titre')
    Évènements - {{$evenement->nom}}
@endsection

@section('contenu')
<h2>{{$evenement->nom}}</h2>
    <form action="{{route('evenements.store')}}" method="post">
        @include('evenements.form')
        <x-champ-text name="ville" label="Ville">{{$evenement->ville->nom}}</x-champ-text>
    </form>
    <div class="options">
        <x-champ-lien href="{{route('evenements.edit', $evenement)}}" titre="Modifier"></x-champ-lien>
        <x-champ-lien href="{{route('evenements.index')}}" titre="Retour à la liste des évènements"></x-champ-lien>
    </div>
@endsection