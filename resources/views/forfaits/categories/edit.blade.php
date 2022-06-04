@extends('mesLayouts.dashboard')

@section('contenu gestion')

<form action="{{route('forfaits.categories.update', $categorie)}}" method="post"  class="formEntreprise">
    @include('forfaits.categories.form')
    <div class="conteneurEntreprise5">
        <div><button class="btnCreer" type="submit">Modifier</button></div>
    </div>
</form>
@endsection