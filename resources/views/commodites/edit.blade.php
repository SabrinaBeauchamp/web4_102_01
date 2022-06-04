@extends('mesLayouts.dashboard')

@section('contenu gestion')

<form action="{{route('commodites.update', $commodite)}}" method="post"  class="formEntreprise">
    @include('commodites.form')
    <div class="conteneurEntreprise5">
        <div><button class="btnCreer" type="submit">Modifier</button></div>
    </div>
</form>
@endsection