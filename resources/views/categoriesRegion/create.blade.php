@extends('mesLayouts.dashboard')

@section('contenu gestion')


<form action="{{route('categoriesRegion.store')}}" method="post"  class="formEntreprise">
    @include('categoriesRegion.form')
    <div class="conteneurEntreprise5">
        <div><button class="btnCreer" type="submit">Créer</button></div>
    </div>
</form>
@endsection