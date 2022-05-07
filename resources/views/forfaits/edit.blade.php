@extends('mesLayouts.layout')

@section('titre')
    Forfaits - {{$forfaits->nom}}
@endsection

@section('contenu')
<h2>Forfait {{$forfaits->nom}}</h2>
    <form action="{{route('forfaits.update', $forfaits)}}" method="post">
        @csrf
        <x-champ-text name="nom" label="Nom">{{$forfaits->nom}}</x-champs-text>
        <x-champ-number name="prix" label="Prix">{{$forfaits->prix}}</x-champs-text>
        <x-champ-text name="categorie" label="Categorie"></x-champ-text>
        <x-champ-textArea name="description" label="Description">{{$forfaits->description}}</x-champs-text>
        
        <div>
            <button data-icon="done" type="submit">Modifier le forfait</button>
        </div>
    </form>
    <div class="options">
        <a data-icon="calendar_view_month" href="{{route('forfaits.index')}}">Retour aux forfaits</a>
    </div>
@endsection