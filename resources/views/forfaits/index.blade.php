@extends('mesLayouts.layout')

@section('titre')
    Tout les forfaits
@endsection

@section('contenu')
    <div>
        <h2>
            <x-champ-lien href="{{route('forfaits.show', $forfait)}}" titre="{{$forfait->nom}}"></x-champ-lien>
        </h2>
        <button class="jaime">
            <p>J'aime</p>
        </button>
    </div>
    
    @if(Auth::check() && Auth::user()->role->name === 'admin')
    <x-champ-lien href="{{route('forfaits.create')}}" titre="Créer un nouveau forfait"></x-champ-lien>
    <x-champ-lien href="{{route('forfaits.categories.index')}}" titre="Retour dans liste des catégories de forfait"></x-champ-lien>
    @endif
@endsection