@extends('mesLayouts.dashboard')

@section('contenu gestion')
<form action="{{route('categories.update', $categorie)}}" method="post"  class="formEntreprise">
    @include('categories.form')
    <div class="conteneurEntreprise5">
        <div><button class="btnCreer" type="submit">Modifier</button></div>
    </div>
</form>
@endsection