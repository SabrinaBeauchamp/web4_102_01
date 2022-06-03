@extends('mesLayouts.layout')

@section('titre')
Tout les évènements
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

@section('arial')
<li>></li>
<li><a href="{{route('evenements.index')}}">Évènements</a></li>
@endsection

@section('contenu')
<section class="calendrierEvenements">
    <div class="container-titre detectAnim">
        <h2 class="titre1">Calendrier des</h2>
        <h2 class="titre-accent">EVENEMENTS</h2>
        <h2 class="titre2"></h2>
    </div>
    <div class="container-calendrier">
        <div class="calendrier-popup">
            @if($evenements->count() > 0)
                @include('evenements.list')
            @else
                <p>la liste est vide</p>
            @endif           
        </div>
    </div>
</section>
   

    {{-- <x-champ-lien href="{{route('evenements.create')}}" titre="Créer un nouveau évènement"></x-champ-lien> --}}
@endsection