@extends('mesLayouts.layout')

@section('titre')
    Nouveau forfait
@endsection

@section('contenu')
<h2>Création d'un nouveau forfait</h2>
    <form action="{{route('categories.store')}}" method="post">
        @csrf
        <x-champ-text name="nom" label="Nom">{{$categorie->nom}}</x-champs-text>
        
       <div>
            <button data-icon="done" type="submit">Créer le forfait</button>
        </div>
    </form>
    <div class="options">
        <a data-icon="calendar_view_month" href="{{route('forfaits.index')}}">Retour aux forfaits</a>
    </div>
@endsection