@extends('mesLayouts.dashboard')

@section('titre gestion')
    Entreprises re
@endsection

@section('contenu gestion')
<form action="{{route('entreprises.store')}}" method="post" enctype="multipart/form-data">
    @include('entreprises.form')
    @include('villes.radio', ['checked'=>$entreprise->ville_id])
    <x-champ-file name="photo" label="photo"></x-champs-text>
    <x-champ-file name="logo" label="logo"></x-champs-text>
    <div><button>Créer</button></div>
</form>
@endsection