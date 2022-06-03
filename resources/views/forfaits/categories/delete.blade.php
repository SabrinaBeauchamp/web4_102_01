@extends('mesLayouts.layout')

@section('titre')
    Forfaits - {{$forfaits->nom}}
@endsection

@section('panneaux0')
    <div class="panneau0 isPanneau panneau-close">
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
    <div class="panneau isPanneau panneau-close">
        <ul class="menu1">
            <li>
                <a class="btn1" href="{{route('acceuil')}}">Acceuil</a>
            </li>
        </ul>
    </div>
@endsection

@section('panneaux')
<!-- index n'a pas de panneaux supplémentaires -->
@endsection

@section('contenu')
<h2>Voulez-vous supprimer ce forfait {{$forfaits->nom}}</h2>
    <form action="{{route('.categories.destroy', $categorie)}}" method="post">
        @csrf
        <div class="conteneurPopup">
            <div class="popup">
                <div class="conteneurTopPopup">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <h3>Êtes-vous sûr de vouloir supprimer la catégorie {{$catgorie}}?</h3>
                </div>
                <div class="conteneurBottomPopup">
                    <button type="submit" name="delete" class="btnPopup">Oui</button>
                    <button class="btnPopup"><a href="{{route('users.gestionaires.index')}}">Non</a></button>
                </div>
            </div>
        </div>
    </form>
    <div class="options">
        <x-champ-lien  href="{{route('forfaits.categories.index')}}" titre="'Retour aux catégories'"></x-champ-lien>
    </div>
@endsection