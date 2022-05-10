@extends('mesLayouts.layout')

@section('titre')
    Évènements - {{$evenement->nom}}
@endsection

@section('contenu')
<h2>{{$evenement->nom}}</h2>
    <form action="{{route('.evenements.store')}}" method="post">
        @csrf
        <x-champ-text name="nom" label="Nom">{{$evenement->nom}}</x-champs-text>
        <x-champ-number name="prix" label="Prix">{{$evenement->prix}}</x-champs-text>
        <x-champ-text name="categorie" label="Categorie"></x-champ-text>
        <x-champ-textArea name="description" label="Description">{{$evenement->description}}</x-champs-text>
        
    </form>
    <div class="options">
        <a data-icon="calendar_view_month" href="{{route('.evenements.index')}}">Retour aux evenements</a>
        {{-- <a href="{{route('.evenements.edit', $evenement)}}">Modifier le evenement</a> --}}
    </div>
@endsection