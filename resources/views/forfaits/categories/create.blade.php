@extends('mesLayouts.layout')

@section('titre')
    Nouveau forfait
@endsection

@section('panneaux0')
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
        <ul class="menu1">
            <li>
                <a class="btn1" href="{{route('accueil')}}">Accueil</a>
            </li>
        </ul>
    </div>
@endsection

@section('panneaux')
<!-- index n'a pas de panneaux supplémentaires -->
@endsection

@section('contenu')
<h2>Création d'un nouveau forfait</h2>
    <form action="{{route('categories.store')}}" method="post">
        @csrf
        <x-champ-text name="nom" label="Nom">{{$categorie->nom}}</x-champs-text>
        
        <x-champ-button type="'submit'" titre="'Créer la catégorie'"></x-champ-button>
    </form>
    <div class="options">
        <x-champ-lien  href="{{route('forfaits.categories.index')}}" titre="'Retour aux categories des forfaits"></x-champ-lien>
    </div>
@endsection