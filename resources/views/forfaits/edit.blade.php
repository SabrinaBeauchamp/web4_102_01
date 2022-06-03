@extends('mesLayouts.layout')

@section('titre')
    Forfaits - {{$forfait->nom}}
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
                <a href="{{route('groupes.show', ['groupe'=>$groupe])}}" class="btn1">Accueil</a>
            </li>
        </ul>
    </div>
@endsection

@section('panneaux')
<!-- index n'a pas de panneaux supplémentaires -->
@endsection

@section('contenu')
<h2>Forfait {{$forfait->nom}}</h2>
    <form action="{{route('forfaits.update', $forfait)}}" method="post">
        @include('forfaits.form')
        <x-champ-img src="{{asset('img/forfaits/'.$forfait->id.'.jpg')}}" alt="forfait {{$forfait->id}}"></x-champ-img>
        <x-champ-file name="photo" label="photo"></x-champs-text>
        
        <x-champ-button type="'submit'" titre="Modifier le forfait"></x-champ-button>
    </form>
    <div class="options">
        <x-champ-lien href="{{route('forfaits.index')}}" titre="Retour aux forfaits"></x-champ-lien>
    </div>
@endsection