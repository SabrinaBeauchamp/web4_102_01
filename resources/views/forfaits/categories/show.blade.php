@extends('mesLayouts.layout')

@section('titre')
    Categorie des forfait
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
                        <button class="deconnexion" type="submit">Deconnexion</button>
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

@section('arial')
<li>></li>
<li><a href="{{route('forfaits.categories.show', $categorie)}}">{{$categorie->nom}}</a></li>
@endsection

@section('contenu')
    <div class="conteneurListeForfaits">
        <!-- le h2 va pouvoir etre changer -->
        <h2>{{$categorie->nom}}</h2>
        <!-- faire foreach -->
        <div class="conteneurAllForfait">
        
            @if($categorie->forfaits->count() === 0)
                <p>la liste est vide</p> 
            @else
                @include("forfaits.list", ['forfaits'=>$categorie->forfaits])
            @endif
        </div>
        <div class="conteneurBtnAutres">
            @if (Auth::check() && Auth::user()->role->name === 'user')
                <div class="button">
                    <a href="{{route('forfaits.categories.index')}}">Retour aux catégories des forfaits</a>
                </div>
            @else
                <div class="button">
                    <a href="{{route('forfaits.create')}}" class="btnCreateForfait">Créer un forfait</a>
                </div>
            @endif
        </div>
        
    </div>
@endsection