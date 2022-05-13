@extends('mesLayouts.layout')

@section('titre')
    Tout mes favories
@endsection

@section('contenu')
<h3>Entreprises</h3>
<h3>Évènements</h3>
<h3>Forfaits</h3>
<x-champ-lien href="{{route('favories.edit', $favories)}}" titre="Modifier la liste de tes favories"></x-champ-lien>
@endsection