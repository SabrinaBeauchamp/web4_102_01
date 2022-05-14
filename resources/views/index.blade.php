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
            <li><a href="{{route('groupes.index')}}">Entreprises</a></li>
            <li><a href="{{route('forfaits.index')}}">Forfaits</a></li>
            <li><a href="{{route('.evenements.index')}}">Évènements</a></li>
        </ul>
    </nav>
@endsection