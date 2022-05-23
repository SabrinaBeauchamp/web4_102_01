@extends('mesLayouts.layout')

@section('titre')
    Agrotouristique
@endsection

@section('contenu')
<h2>Agrotouristique</h2>
    <p>Cherche dans tout</p>
    <form action="{{route('recherche.recherche')}}" method="get">
        <input type="text" name="q" id="q">
        <button>Rechercher</button>
    </form>
    <p>Cherche seulement les entreprises</p>
    <form action="{{route('recherche.rechercheEntreprise')}}" method="get">
        <input type="text" name="q" id="q">
        <button>Rechercher</button>
    </form>
    <nav>
        <ul>
            <li><a href="{{route('groupes.index')}}">Groupe</a></li>
            <li><a href="{{route('forfaits.index')}}">Forfaits</a></li>
            <li><a href="{{route('forfaits.categories.index')}}">Catégories</a></li>
            <li><a href="{{route('evenements.index')}}">Évènements</a></li>
            <li><a href="{{route('entreprises.index')}}">Entreprises</a></li>
            <li><a href="{{route('favories.index')}}">Favories</a></li>
        </ul>
        <ul>
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
            <li><a href="{{route('commodites.index')}}">Commodites</a></li>
            <li><a href="{{route('recherche.rechercheAvancee')}}">Recherche Avancée</a></li>
        </ul>
    </nav>
    
   
@endsection