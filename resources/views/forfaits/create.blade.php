@extends('mesLayouts.dashboard')

@section('contenu gestion')

<h2>Création d'un nouveau forfait</h2>
    <form action="{{route('forfaits.store')}}" method="post" enctype="multipart/form-data">
        @include('forfaits.form')
        @include('forfaits.categories.radios', ['checked'=>$forfait->categorie_id])
        <x-champ-file name="photo" label="photo"></x-champs-text>

        <x-champ-button type="'submit'" titre="'Créer le forfait'"></x-champ-button>
    </form>
    <div class="options">
        <a data-icon="calendar_view_month" href="{{route('forfaits.index')}}">Retour aux forfaits</a>
    </div>
@endsection