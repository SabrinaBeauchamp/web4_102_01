@extends('mesLayouts.layout')

@section('titre')
{{$entreprise->nom}}
@endsection

@section('panneaux0')
    <!-- les panneaux essentiels. index et entreprise sont fermés à l'ouverture de la page -->
    <div class="panneau0 isPanneau panneau-close">
        <ul class="menu0">
            <li>
                <a class="btn1" href="{{route('acceuil')}}">Acceuil</a>
            </li>
            <li>
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
    <div class="panneau2 isPanneau panneau-close">
        <h2>{{$groupeSelectionner->nom}}</h2>
        <ul class="menu2"> 
            @include("categories.liste", ['categories'=>$entreprise->categories])
        </ul>
    </div>
    <div class="panneau3 isPanneau panneau-close">
        <h2>{{$categorie->nom}}</h2>
        <ul class="menu3">
            @include("entreprises.liste", ['entreprises'=>$categorie->entreprises])
        </ul>
    </div>
@endsection

@section('arial')
    <li>></li>
    <li><a href="{{route('groupes.show', ['groupe' => $groupe])}}">{{$groupe->nom}}</a></li>
    <li>></li>
    <li><a href="{{route('categories.show', ['categorie' => $categorie])}}">{{$categorie->nom}}</a></li>
    <li>></li>
    <li><a href="#">{{$entreprise->nom}}</a></li>
@endsection

@section('contenu')
    <section class="introduction-entreprise">
        <div class="container-titre detectAnim">
            <h2 class="titre1">Information sur l'entreprise </h2>
            <h2 class="titre-accent">{{$entreprise->nom}}</h2>
            <h2 class="titre2"></h2>
        </div>
        <div class="container-introduction">
            <p class="paragraphe">Integer ac molestie orci, non maximus orci. Etiam sit amet rhoncus lorem. Phasellus sed commodo nisl. Fusce gravida arcu non dignissim mollis. Integer iaculis ut lectus luctus blandit. Curabitur lacus velit, convallis vitae vehicula eu, luctus id metus. Duis auctor sem justo, et lobortis sem accumsan vitae.</p>
        </div>
        <div>
            <ul class="menu4">
                @foreach($commodites as $commodite)
                <li>
                    <a href="{{route('commodites.show', ['commodite'=>$commodite])}}">{{$commodite['nom']}}</a> <br>
                </li>
                @endforeach 
            </ul>
        </div>
    </section>
@endsection