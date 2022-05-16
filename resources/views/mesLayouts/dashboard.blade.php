@extends('mesLayouts.layout')

@section('titre')
    Tableau de bord
@endsection

@section('contenu')
<nav>
    <ul>
        @yield('gestion')
        
    </ul>
</nav>
<div>
    <h2>@yield('titre gestion')</h2>
    <section>@yield('contenu gestion')</section>
</div>
@endsection