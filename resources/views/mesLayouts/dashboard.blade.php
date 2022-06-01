
@extends('mesLayouts.layout')

@section('titre')
@endsection

@section('contenu')
<div class="conteneurDashboard">
    <!-- button ouverture doit avoir sa propre blade -->
    <div class="conteneurButtonMenuDash">
        <div class="boutonOpen">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
    <div class="conteneurSidebar">
        <div class="conteneurSidebarProfil conteneurSidebarAll">
            <i class="fa-solid fa-user"></i>
            <a href="{{route('users.gestionaires.edit', Auth::user())}}">Profil</a>
        </div>
        @if(Auth::user()->role->name === 'admin')
        <div class="conteneurSidebarTop boutonClose">
            <i class="fa-solid "></i>
            <a href="{{route('entreprises')}}" >gestion de membre</a>
        </div>
        <div class="conteneurSidebarTop boutonClose">
            <i class="fa-solid "></i>
            <a href="{{route('populaire')}}" >gestion d'activités populaires</a>
        </div>
        <div class="conteneurSidebarTop boutonClose">
            <i class="fa-solid "></i>
            <a href="{{route('evenements')}}" >gestion des évènements</a>
        </div>
        @else
            <div class="conteneurSidebarPaiement conteneurSidebarAll">
                <i class="fa-solid fa-credit-card"></i>
                <a href="">Paiement</a>
            </div>
            <div class="conteneurSidebarFavoris conteneurSidebarAll">
                <i class="fa-solid fa-heart" ></i>
                <a href="{{route('favories.index')}}">Favoris</a>
                <i class="fa-solid fa-caret-right" id="arrowFav"></i>
            </div>
            <div class="conteneurSideBarSousFavoris" id="sidebarFav">
                <div class="conteneurSidebarEntreprise sousFav">
                    <i class="fa-solid fa-building"></i>
                    <a href="">Entreprises</a>
                </div>
                <div class="conteneurSidebarEvent sousFav">
                    <i class="fa-solid fa-calendar-days"></i>
                    <a href="">Évènements</a>
                </div>
                <div class="conteneurSidebarForfait sousFav">
                    <i class="fa-solid fa-store"></i>
                    <a href="">Forfaits</a>
                </div>
            </div>
            <div class="conteneurSidebarSetting conteneurSidebarAll">
                <i class="fa-solid fa-gear"></i>
                <a href="">Réglage</a>
            </div>
        @endif
        <div class="conteneurSidebarDisconnect conteneurSidebarAll">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
            @if(Auth::user())
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit">Deconnexion</button>
                </form>
            @else
                <a href="">Déconnexion</a> 
            @endif
        </div>
    </div>
    <div>
        <h2>@yield('titre gestion')</h2>
        <div>@yield('contenu gestion')</div>
</div>

    <script src="{{asset('williamCSS/javascript William/sidebarAccordionUser.js')}}"></script>
@endsection