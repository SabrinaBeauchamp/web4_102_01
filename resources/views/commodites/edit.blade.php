@extends('mesLayouts.dashboard')

@section('contenu gestion')

<form action="{{route('commodites.update', $commodite)}}" method="post">
    @include('commodites.form')
    <div><button>Modifier</button></div>
</form>
@endsection