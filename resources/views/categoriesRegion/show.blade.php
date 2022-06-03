@extends('mesLayouts.layout')

@section('titre')
{{$categorieRegion->nom}}
@endsection

@section('arial')
<li>></li>
<li><a href="{{route('categoriesRegion.index')}}">MRC</a></li>
<li>></li>
<li><a href="#">{{$categorieRegion->nom}}</a></li>
@endsection

@section('panneaux0')
    <!-- les panneaux essentiels. index et entreprise sont fermés à l'ouverture de la page -->
    <div class="panneau0 isPanneau panneau-close">
        <ul class="menu0">
            <li>
                <a class="btn1" href="{{route('accueil')}}">Accueil</a>
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
    <div class="panneau isPanneau panneau-close">
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
<!-- index n'a pas de panneaux supplémentaires -->
@endsection

@section('contenu')
<!-- Contenu principal -->
<section class="sous-categories">
    <div class="container-titre detectAnim">
        <h2 class="titre1">Toutes les villes dans</h2>
        <h2 class="titre-accent">{{$categorieRegion->nom}}</h2>
        <h2 class="titre2"> </h2>
    </div>
    <div>
        <ul class="menu4"> 
            @foreach($villes as $ville)
                <li>
                    <a href="{{route('villes.show', ['ville'=>$ville])}}">{{$ville->nom}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
<section class="sous-categories">
    <div class="container-titre detectAnim">
        <h2 class="titre1">La région est</h2>
        <h2 class="titre-accent">reconnue</h2>
        <h2 class="titre2">pour</h2>
    </div>
    <div>
        <ul class="menu4"> 
            <li>
                <a href="{{route('accueil')}}">Production maraichère</a>
            </li>
            <li>
                <a href="{{route('accueil')}}">Production laitière</a>
            </li>
            <li>
                <a href="{{route('accueil')}}">Acériculture</a>
            </li>
            <li>
                <a href="{{route('accueil')}}">Microbrasserie</a>
            </li>
            <li>
                <a href="{{route('accueil')}}">Cabane à sucre</a>
            </li>

        </ul>
    </div>
</section>
@endsection
