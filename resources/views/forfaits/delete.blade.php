@extends('mesLayouts.layout')

@section('titre')
    Forfaits - {{$forfait->nom}}
@endsection

@section('contenu')
<h2>Voulez-vous supprimer ce forfait {{$forfait->nom}}</h2>
    <form action="{{route('forfaits.destroy', $forfait)}}" method="post">
        @csrf
        <x-champ-button type="submit" titre="'Supprimer le forfait'"></x-champ-button>
        <x-champ-button-delete type="submit" titre="'Modifier le forfait'"></x-champ-button>
        
    </form>
    <div class="options">
        <a data-icon="calendar_view_month" href="{{route('forfaits.index')}}">Retour aux forfaits</a>
    </div>
@endsection