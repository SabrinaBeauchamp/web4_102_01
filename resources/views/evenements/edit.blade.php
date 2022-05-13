@extends('mesLayouts.layout')

@section('titre')
Évènements - {{$evenements->nom}}
@endsection

@section('contenu')
<h2>Évènement {{$evenements->nom}}</h2>
    <form action="{{route('evenements.update', $evenements)}}" method="post">
        @csrf
        <x-champ-text name="nom" label="Nom">{{$evenements->nom}}</x-champs-text>
        <x-champ-number name="prix" label="Prix">{{$evenements->prix}}</x-champs-text>
        <x-champ-text name="categorie" label="Categorie"></x-champ-text>
        <x-champ-textArea name="description" label="Description">{{$evenements->description}}</x-champs-text>
        
        <div>
            <button data-icon="done" type="submit">Modifier le evenement</button>
        </div>
    </form>
    <div class="options">
        <a data-icon="calendar_view_month" href="{{route('evenements.index')}}">Retour aux évènements</a>
    </div>
@endsection