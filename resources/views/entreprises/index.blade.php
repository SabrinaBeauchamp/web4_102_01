@extends('mesLayouts.layout')

@section('titre')
Entreprises
@endsection

@section('panneaux0')
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
<li><a href="#">Entreprises</a></li>
@endsection

@section('contenu')

    @foreach($entreprises as $entreprise)
        <li>
            <a class="btn3 commodites" href="{{route('entreprises.show', $entreprise)}}">
                {{$entreprise->nom}}
            </a>
        </li>
    @endforeach
    @if(Auth::check() && Auth::user()->role === 'admin')
    <a class="boutonUniforme" href="{{route('entreprises.create')}}">Ajouter une entreprise</a>
    @endif
@endsection