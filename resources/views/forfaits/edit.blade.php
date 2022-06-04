@extends('mesLayouts.dashboard')


@section('contenu gestion')

    <form action="{{route('forfaits.update', $forfait)}}" method="post" class="formEntreprise">
        @include('forfaits.form')
        @include('forfaits.categories.radios', ['checked'=>$forfait->categorie_id])
        <div class="conteneurEntreprise5Forfait conteneurEntreprise5">
            <x-champ-file name="photo" label="photo" class="btnImport"></x-champs-text>
            <div><button class="btnCreer" type="submit">Modifier</button></div>
        </div>
    </form>
@endsection