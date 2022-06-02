@extends('mesLayouts.layout')

@section('panneaux0')
    <!-- les panneaux essentiels. index et entreprise sont fermés à l'ouverture de la page -->
    <div class="panneau0 isPanneau panneau-open">
        <ul class="menu0">
            <li>
                <a class="btn1" href="{{route('categoriesRegion.index')}}">MRC</a>
            </li>
            <li>
                <a class="btn1" href="{{route('forfaits.categories.index')}}">Catégories</a>
            </li>
            <li>
                <a class="btn1" href="{{route('evenements.index')}}">Évènements</a>
            </li>
            @if(Auth::user())
                <li>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit">Deconnexion</button>
                    </form>
                </li>
            @else
                <li>
                    <a href="{{route('login')}}">Me connecter</a>
                </li>
            @endif
            <li><a href="{{route('users.gestionaires.index')}}">Compte</a></li>
        </ul>
    </div>
    <div class="panneau isPanneau panneau-open">
        <h2>Groupes</h2>
        <ul class="menu1">
            @foreach($groupes as $groupe)
                <li>
                    <a href="{{route('groupes.show', ['groupe'=>$groupe])}}" class="btn1">{{$groupe['nom']}}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

@section('panneaux')
    <div class="panneau2 isPanneau panneau-open">
        <h2>{{$groupeSelection->nom}}</h2>
        <ul class="menu2"> 
            @include("categories.liste", ['categories'=>$groupeSelection->categories])
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