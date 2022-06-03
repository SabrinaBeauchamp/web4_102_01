@extends('mesLayouts.dashboard')

@section('contenu gestion')

<form action="{{route('forfaits.categories.update', $categorie)}}" method="post">
    @include('categories.form')
    <div><button>Modifier</button></div>
</form>
@endsection