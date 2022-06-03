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
    <form action="{{route('forfaits.store')}}" method="post" enctype="multipart/form-data">
        @include('forfaits.form')
        @include('forfaits.categories.radios', ['checked'=>$forfait->categorie_id])
        <x-champ-file name="photo" label="photo"></x-champs-text>

        <x-champ-button type="'submit'" titre="'Créer le forfait'"></x-champ-button>
    </form>
    <div class="options">
        <a data-icon="calendar_view_month" href="{{route('forfaits.index')}}">Retour aux forfaits</a>
    </div>
@endsection