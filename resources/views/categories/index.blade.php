@extends('mesLayouts.layout')

@section('titre')
Les catégories
@endsection

@section('contenu')

@include("categories.liste", ['categories'=>$categories])
<a  class="boutonUniforme" href="{{route('categories.create')}}">Ajouter une catégorie</a>
@endsection