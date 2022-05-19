@extends('mesLayouts.layout')

@section('titre')
    Tout les forfaits
@endsection

@section('contenu')
    <div>
        @include('forfaits.list')
    </div>
    
    <!-- @if(Auth::check() && Auth::user()->role->name === 'admin') -->
    <x-champ-lien href="{{route('forfaits.create')}}" titre="Créer un nouveau forfait"></x-champ-lien>
    <x-champ-lien href="{{route('forfaits.categories.index')}}" titre="Retour dans liste des catégories de forfait"></x-champ-lien>
    <!-- @endif -->
@endsection