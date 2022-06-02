@extends('mesLayouts.layout')

@section('menu')
    <div class="panneau2 isPanneau panneau-open">
        <h2>{{$groupeSelectionner->nom}}</h2>
        <ul class="menu2"> 
            @include("categories.liste", ['categories'=>$groupeSelectionner->categories])
        </ul>
    </div>
    <div class="panneau3 isPanneau panneau-open">
        <h2>{{$categorie->nom}}</h2>
        <ul class="menu3">
            @include("entreprises.liste", ['entreprises'=>$categorie->entreprises])
        </ul>
    </div>
@endsection

@section('titre')
    {{$categorie->nom}}
@endsection

@section('arial')
    <li>></li>
    <li><a href="{{route('groupes.show', ['groupe' => $groupeSelectionner])}}">{{$groupeSelectionner->nom}}</a></li>
    <li>></li>
    <li><a href="#">{{$categorie->nom}}</a></li>
@endsection

@section('contenu')
        <section class="sous-categories">
            <div class="container-titre detectAnim">
                <h2 class="titre1">Toutes les entreprises dans</h2>
                <h2 class="titre-accent">{{$categorie->nom}}</h2>
                <h2 class="titre2"> </h2>
            </div>
            <div>
                <ul class="menu4"> 
                    @include("entreprises.liste", ['entreprises'=>$categorie->entreprises])
                </ul>
            </div>
        </section>
@endsection