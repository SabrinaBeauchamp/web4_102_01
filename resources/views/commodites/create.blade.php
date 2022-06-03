@extends('mesLayouts.dashboard')

@section('contenu gestion')

<form action="{{route('commodites.store')}}" method="post">
    @include('commodites.form')
    <div><button>Créer</button></div>
</form>
@endsection