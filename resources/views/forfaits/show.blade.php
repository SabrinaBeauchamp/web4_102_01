@extends('mesLayouts.layout')

@section('titre')
    Forfaits - {{$forfait->nom}}
@endsection

@section('contenu')
<h2>{{$forfait->nom}}</h2>
    <form action="{{route('forfaits.store')}}" method="post">
        @include('forfaits.form')
        <x-champ-text name="categorie" label="Categorie">{{$forfait->categorie->nom}}</x-champ-text>
        <x-champ-img src="{{asset('img/forfaits/'.$forfait->id.'.jpg')}}" alt="forfait {{$forfait->id}}"></x-champ-img>
    <!-- if fileExist pour les photo faire un placeholder -->
    </form>
    <div class="options">
        <x-champ-lien href="{{route('forfaits.categories.show', $forfait->categorie )}}" titre="'Retour aux forfaits'"></x-champ-lien>
        <x-champ-lien href="{{route('forfaits.edit', $forfait)}}" titre="'Modifier le forfait'"></x-champ-lien>
    </div>
@endsection