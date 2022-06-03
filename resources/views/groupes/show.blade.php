@extends('mesLayouts.layout')

@section('titre')
{{$groupeSelection->nom}}
@endsection

@section('panneaux0')
    <!-- les panneaux essentiels. index et entreprise sont fermés à l'ouverture de la page -->
    <div class="panneau0 isPanneau panneau-open">
        <ul class="menu0">
            <li>
                <a class="btn1" href="{{route('acceuil')}}">Acceuil</a>
            </li><li>
                <a class="btn1" href="{{route('categoriesRegion.index')}}">MRC</a>
            </li>
            <li>
                <a class="btn1" href="{{route('forfaits.categories.index')}}">Catégories</a>
            </li>
            <li>
                <a class="btn1" href="{{route('evenements.index')}}">Évènements</a>
            </li>
            @if(Auth::user())
            <li><a href="{{route('users.gestionaires.index')}}">Compte</a></li>
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