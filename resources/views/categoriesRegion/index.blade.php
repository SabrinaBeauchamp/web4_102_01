@extends('mesLayouts.layout')

@section('titre')
Carte interactive des MRC
@endsection

@section('panneaux0')
<!-- les panneaux essentiels. index et entreprise sont fermés à l'ouverture de la page -->
<div class="panneau0 isPanneau panneau-close">
    <ul class="menu0">
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
        <li><a href="{{route('users.gestionaires.index')}}">Compte</a></li>
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
    <!-- Contenu principal -->
        <section class="carte-interactive">
            <div class="container-titre detectAnim">
                <h2 class="titre1">La </h2>
                <h2 class="titre-accent">carte interactive</h2>
                <h2 class="titre2">des Laurentides</h2>
            </div>
            <div class="container-carte">
                <div class="container-liste">
                    <ul class="liste-carte">
                        @foreach($categoriesRegion as $categorieRegion)
                        <a class="item-carte" href="{{route('categoriesRegion.show', ['categorieRegion'=>$categorieRegion])}}">
                            {{$categorieRegion->nom}}
                        </a>
                        @endforeach
                    </ul>
                </div>
                <div class="container-background-carte">
                    <img class="img-carte-1"  src="{{asset('images/mrc_argenteuil.svg')}}" alt="carte-image">
                    <img class="img-carte-2"  src="{{asset('images/mrc_laurentides.svg')}}" alt="carte-image">
                    <img class="img-carte-3"  src="{{asset('images/mrc_pdeh.svg')}}" alt="carte-image">
                    <img class="img-carte-4" src="{{asset('images/mrc_rdn.svg')}}" alt="carte-image">
                    <img class="img-carte-5"  src="{{asset('images/mrc_mirabel.svg')}}" alt="carte-image">
                    <img class="img-carte-1"  src="{{asset('images/mrc_deuxmontagnes.svg')}}" alt="carte-image">
                </div>
            </div>
        </section>
@endsection
