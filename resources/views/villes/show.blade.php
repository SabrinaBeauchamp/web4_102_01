@extends('mesLayouts.layout')
@section('titre')

{{$ville->nom}}

@endsection
@section('arial')
<li>></li>
<li><a href="{{route('categoriesRegion.index')}}">MRC</a></li>
<li>></li>
<li><a href="{{route('categoriesRegion.show', ['categorieRegion' => $categorieRegion])}}">{{$categorieRegion->nom}}</a></li>
<li>></li>
<li><a href="#">{{$ville->nom}}</a></li>
@endsection
@section('contenu')

<section class="sous-categories">
    <div class="container-titre detectAnim">
        <h2 class="titre1">Toutes les entreprises dans</h2>
        <h2 class="titre-accent">{{$ville->nom}}</h2>
        <h2 class="titre2"> </h2>
    </div>
    <div>
        <ul class="menu4"> 
        @foreach($entreprises as $entreprise)
        <li>
            <a href="{{route('entreprises.show', ['entreprise'=>$entreprise])}}">{{$entreprise->nom}}</a>
        </li>
        @endforeach
        </ul>
    </div>
</section>
@endsection
