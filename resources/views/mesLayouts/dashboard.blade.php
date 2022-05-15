@extends('mesLayouts.layout')

@section('titre')
    Tableau de bord
@endsection

@section('contenu')
<nav>
    <ul>
        <li><a href="">Gestion de compte</a></li>
        <li><a href="">Gestion de favories</a></li>
        <li><a href="">Gestion</a></li>
        <li><a href="">Gestion</a></li>
    </ul>
</nav>
<div>
    <h2>@yield('titre gestion')</h2>
    <section>@yield('contenu gestion')</section>
</div>
@endsection