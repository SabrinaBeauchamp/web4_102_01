@extends('mesLayouts.dashboard')

@section('contenu gestion')

<form action="{{route('categoriesRegion.update', $categorieRegion)}}" method="post"  class="formEntreprise">
    @include('categoriesRegion.form')
    <div class="conteneurEntreprise5">
        <div><button class="btnCreer" type="submit">Modifier</button></div>
    </div>
</form>
@endsection