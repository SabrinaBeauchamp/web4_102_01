@extends('mesLayouts.dashboard')

@section('contenu gestion')

<form action="{{route('commodites.store')}}" method="post"  class="formEntreprise">
    @include('commodites.form')
    <div class="conteneurEntreprise5">
        <div><button class="btnCreer" type="submit">Créer</button></div>
    </div>
</form>
@endsection