@extends('mesLayouts.layout')

@section('titre')
    Tableau de bord
@endsection

@section('contenu')
<nav>
    <ul>
    @if(Auth::user()->role->name === 'admin')
        <li><a href="">Gestion de membre</a></li>
        <li><a href="{{route('populaire')}}">Gestion d'activités populaire</a></li>
        <li><a href="{{route('evenements.index')}}">Gestion des évènements</a></li>
    @else
        <li><a href="">Gestion de compte</a></li>
        <li><a href="{{route('favories.index')}}">Gestion de favories</a></li>
        <li><a href="">Gestion des informations de paiment</a></li>
    @endif
        
    </ul>
</nav>
<div>
    <h2>@yield('titre gestion')</h2>
    <section>@yield('contenu gestion')</section>
</div>
@endsection