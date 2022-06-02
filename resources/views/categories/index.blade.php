@extends('mesLayouts.layout')


@section('contenu')
<h1>
Les catégories
</h1>
@include("categories.liste", ['categories'=>$categories])
<a  class="boutonUniforme" href="{{route('categories.create')}}">Ajouter une catégorie</a>
@endsection