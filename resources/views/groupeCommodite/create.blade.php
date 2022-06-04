@extends('mesLayouts.dashboard')

@section('contenu gestion')


<form action="{{route('groupesCommodite.store')}}" method="post"  class="formEntreprise">
    @include('groupeCommodite.form')
    <div class="conteneurEntreprise5">
        <div><button class="btnCreer" type="submit">Créer</button></div>
    </div>
</form>
@endsection