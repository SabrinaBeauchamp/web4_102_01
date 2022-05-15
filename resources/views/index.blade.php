@extends('mesLayouts.layout')

@section('titre')
    Agrotouristique
@endsection

@section('contenu')
<h2>Agrotouristique</h2>
    <nav>
        <ul>
            <li><a href="{{route('forfaits.index')}}">Forfaits</a></li>
            <li><a href="{{route('forfaits.categories.index')}}">Catégories</a></li>
            <li><a href="{{route('evenements.index')}}">Évènements</a></li>
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
        </ul>
    </nav>
@endsection