@extends('mesLayouts.layout')

@section('titre')
{{$groupeSelection->nom}}
@endsection
@section('menu')
    <div class="panneau2 isPanneau panneau-open">
        <h2>{{$groupeSelection->nom}}</h2>
        <ul class="menu2"> 
            @include("categories.liste", ['categories'=>$groupeSelection->categories])
        </ul>
    </div>
@endsection

@section('arial')
    <li>></li>
    <li><a href="#">{{$groupeSelection->nom}}</a></li>
@endsection

@section('contenu')
    <section class="sous-categorie">
        <div class="container-titre detectAnim">
            <h2 class="titre1">Tous les secteurs disponibles dans</h2>
            <h2 class="titre-accent">{{$groupeSelection->nom}}</h2>
            <h2 class="titre2"> </h2>
        </div>
        <div>
            <ul class="menu4"> 
                @include("categories.liste", ['categories'=>$groupeSelection->categories])
            </ul>
        </div>
    </section>
@endsection