@extends('mesLayouts.layout')

@section('titre')
    Forfaits - {{$forfait->nom}}
@endsection

@section('contenu')
<h2>Forfait {{$forfait->nom}}</h2>
    <form action="{{route('forfaits.update', $forfait)}}" method="post">
        @csrf
        <x-champ-text name="nom" label="Nom">{{$forfait->nom}}</x-champs-text>
        <x-champ-number name="prix" label="Prix">{{$forfait->prix}}</x-champs-text>

        <x-champ-textArea name="description" label="Description">{{$forfait->description}}</x-champs-text>
        
        <div>
            <button data-icon="done" type="submit">Modifier le forfait</button>
        </div>
    </form>
    <div class="options">
        <a data-icon="calendar_view_month" href="{{route('forfaits.index')}}">Retour aux forfaits</a>
    </div>
@endsection