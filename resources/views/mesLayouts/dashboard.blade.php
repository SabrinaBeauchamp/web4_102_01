<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('williamCSS/style.css')}}">
    <script src="{{asset('https://kit.fontawesome.com/f4e3a6480f.js')}}" crossorigin="anonymous"></script>

    <script src="{{asset('js/Favori.js')}}"></script>
    <script src="{{asset('js/Populaire.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{asset('felixCss/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <title>@yield("titre") - Les Forfaits</title>
</head>
<body>
<div class="conteneurDashboard">
    <!-- button ouverture doit avoir sa propre blade -->
    <div class="conteneurButtonMenuDash">
        <div class="boutonOpen">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
    <div class="conteneurSidebar">
        <div class="conteneurSidebarTop boutonClose">
            <i class="fa-solid fa-xmark"></i>
            <a href="{{route('acceuil')}}" class="dashboardLink">Dashboard</a>
        </div>
        <div class="conteneurSidebarProfil conteneurSidebarAll">
            <i class="fa-solid fa-user"></i>
            <a href="{{route('users.gestionaires.edit', Auth::user())}}">Profil</a>
        </div>
        @if(Auth::user()->role->name === 'admin')
        
            <div class="conteneur conteneurSidebarAll">
            <i class="fa-solid fa-users"></i>
                <a href="{{route('gestion')}}">Gestion de membre</a>
            </div>
            <div class=" conteneurSidebarAll">
            <i class="fa-solid fa-person-running"></i>
                <a href="{{route('populaire')}}" >Gestion d'activités</a>
            </div>
            <div class=" conteneurSidebarAll">
            <i class="fa-solid fa-calendar-days"></i>
                <a href="{{route('evenements')}}" >Gestion des évènements</a>
            </div>
            <div class=" conteneurSidebarAll conteneurSidebarEventAdmin">
            <i class="fa-solid fa-campground"></i>
                <a href="{{route('evenements')}}" >Gestion des forfaits</a>
            </div>
        @else
            <div class="conteneurSidebarPaiement conteneurSidebarAll">
                <i class="fa-solid fa-credit-card"></i>
                <a href="">Paiement</a>
            </div>
            <div class="conteneurSidebarFavoris conteneurSidebarAll">
                <i class="fa-solid fa-heart" ></i>
                <a href="">Favoris</a>
                <i class="fa-solid fa-caret-right" id="arrowFav"></i>
            </div>
            <div class="conteneurSideBarSousFavoris" id="sidebarFav">
                <div class="conteneurSidebarEntreprise sousFav">
                    <i class="fa-solid fa-building"></i>
                    <a href="{{route('users.gestionaires.favories.index', 'entreprises')}}">Entreprises</a>
                </div>
                <div class="conteneurSidebarEvent sousFav">
                    <i class="fa-solid fa-calendar-days"></i>
                    <a href="{{route('users.gestionaires.favories.index', 'evenements')}}">Évènements</a>
                </div>
                <div class="conteneurSidebarForfait sousFav">
                    <i class="fa-solid fa-store"></i>
                    <a href="{{route('users.gestionaires.favories.index', 'forfaits')}}">Forfaits</a>
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
                    <button type="submit">Déconnexion</button>
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
    
</body>
<script src="{{asset('williamCSS/javascript_William/sidebarAccordionUser.js')}}"></script>
</html>