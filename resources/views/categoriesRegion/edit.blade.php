@extends('mesLayouts.dashboard')

@section('contenu gestion')

<form action="{{route('categoriesRegion.update', $categorieRegion)}}" method="post">
    @include('categoriesRegion.form')
    <div><button>Modifier</button></div>
</form>
@endsection