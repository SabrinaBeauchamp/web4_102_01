@extends('mesLayouts.dashboard')

@section('titre gestion')
    information du compte
@endsection


@section('contenu gestion')
<form action="{{route('users.update', Auth::user()}}" methode="post"></form>
@endsection