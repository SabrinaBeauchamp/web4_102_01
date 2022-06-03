@extends('mesLayouts.layout')

@section('titre')
    Évènements - {{$evenement->nom}}
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
    <h2>{{$evenement->nom}}</h2>
    <form action="{{route('evenements.store')}}" method="post">
        @include('evenements.form')
        <x-champ-text name="ville" label="Ville">{{$evenement->ville->nom}}</x-champ-text>
    </form>
    <div class="options">
        <x-champ-lien href="{{route('evenements.edit', $evenement)}}" titre="Modifier"></x-champ-lien>
        <x-champ-lien href="{{route('evenements.index')}}" titre="Retour à la liste des évènements"></x-champ-lien>
    </div>
@endsection