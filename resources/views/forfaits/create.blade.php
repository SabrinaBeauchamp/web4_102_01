@extends('mesLayouts.layout')

@section('titre')
    Nouveau forfait
@endsection

@section('contenu')
<h2>Création d'un nouveau forfait</h2>
    <form action="{{route('forfaits.store')}}" method="post" enctype="multipart/form-data">

        @csrf
        <x-champ-text name="nom" label="Nom">{{$forfait->nom}}</x-champs-text>
        <x-champ-number name="prix" label="Prix">{{$forfait->prix}}</x-champs-text>
        @include('forfaits.categories.radios', ['checked'=>$forfait->categorie_id])
        
        <x-champ-textArea name="description" label="Description">{{$forfait->description}}</x-champs-text>
        <x-champ-file name="photo" label="photo"></x-champs-text>
        <div>
            <button data-icon="done" type="submit">Créer le forfait</button>
        </div>
    </form>
    <div class="options">
        <a data-icon="calendar_view_month" href="{{route('forfaits.index')}}">Retour aux forfaits</a>
    </div>
@endsection