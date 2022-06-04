@extends('mesLayouts.dashboard')

@section('contenu gestion')
<form class="formEntreprise" action="{{route('entreprises.store')}}" method="post" enctype="multipart/form-data">

    @include('entreprises.form')
    @include('villes.radio', ['checked'=>$entreprise->ville_id])
    <div class="conteneurEntreprise5">
        <x-champ-file name="photo" label="photo" class="btnImport"></x-champs-text>
        <x-champ-file name="logo" label="logo" class="btnImport"></x-champs-text>
        <div>
            <button class="btnCreer" type="submit">Créer</button>
        </div>
    </div>
</form>
@endsection