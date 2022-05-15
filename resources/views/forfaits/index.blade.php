@extends('mesLayouts.layout')

@section('titre')
    Tout les forfaits
@endsection

@section('contenu')
    @foreach($forfaits as $forfait)
    <h2>
        <x-champ-lien href="{{route('forfaits.show', $forfait)}}" titre="{{$forfait->nom}}"></x-champ-lien>
        </h2>
    @endforeach
    @if(Auth::user()->role->name === 'admin')
    <x-champ-lien href="{{route('forfaits.create')}}" titre="Créer un nouveau forfait"></x-champ-lien>
    <x-champ-lien href="{{route('forfaits.categories.index')}}" titre="Retour dans liste des catégories de forfait"></x-champ-lien>
    @endif
@endsection