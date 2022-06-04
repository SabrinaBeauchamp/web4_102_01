@extends('mesLayouts.dashboard')

@section('contenu gestion')

<h2>Création d'un nouveau forfait</h2>
    <form action="{{route('forfaits.store')}}" method="post" enctype="multipart/form-data" class="formEntreprise">
        @include('forfaits.form')
        @include('forfaits.categories.radios', ['checked'=>$forfait->categorie_id])
        <x-champ-file name="photo" label="photo"></x-champs-text>

            <div class="conteneurEntreprise5">
                <div><button class="btnCreer" type="submit">Créer</button></div>
            </div>
    </form>
    <div class="options">
        <a data-icon="calendar_view_month" href="{{route('forfaits.index')}}">Retour aux forfaits</a>
    </div>
@endsection