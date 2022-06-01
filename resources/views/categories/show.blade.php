<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link rel="stylesheet" href="{{asset('felixCss/style.css')}}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
<title>Web 4 synthèse | Agrotourisme Laurentides</title>
</head>
<body>
<div class="interface">
    <!-- Menu hamburger -->
    <div id="container-menu">
        <nav id="nav-principale">
            <div class="zone-btn isPanneau panneau-close">
                <div class="container-btn-ouvrirPanneau">
                    <i class="btn-ouvrirPanneau" tabindex="0"></i>
                </div>
            </div>
            <!-- PANNEAUX -->
            <div class="container-panneau">
                <div class="panneau isPanneau panneau-open">
                    <h2>Groupes</h2>
                    <ul class="menu1">
                        @foreach($groupes as $groupe)
                            <li>
                                <button class="btn1">
                                    <a href="{{route('groupes.show', ['groupe'=>$groupe])}}">{{$groupe['nom']}}</a>
                                </button>
                            </li>
                            @endforeach
                            <li>
                                <button class="btn1">
                                    <a href="{{route('categoriesRegion.index')}}">MRC</a>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="panneau2 isPanneau panneau-open">
                        <h2>{{$groupeSelectionner->nom}}</h2>
                        <ul class="menu2"> 
                            @include("categories.liste", ['categories'=>$groupeSelectionner->categories])
                        </ul>
                    </div>
                <div class="panneau3 isPanneau panneau-open">
                    <h2>{{$categorie->nom}}</h2>
                    <ul class="menu3">
                        @include("entreprises.liste", ['entreprises'=>$categorie->entreprises])
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Header -->
    <header id="mainHeader">
        <h1>{{$categorie->nom}}</h1>
    </header>
    <!-- Fil d'Ariane -->
    <div class="fil-ariane">
        <ul>
            <li><a href="{{route('acceuil')}}">Accueil</a></li>
            <li>></li>
            <li><a href="{{route('groupes.show', ['groupe' => $groupeSelectionner])}}">{{$groupeSelectionner->nom}}</a></li>
            <li>></li>
            <li><a href="#">{{$categorie->nom}}</a></li>
        </ul>
    </div>
    <!-- Contenu principal -->
    <main>
        <section class="sous-categories">
            <div class="container-titre detectAnim">
                <h2 class="titre1">Toutes les entreprises dans</h2>
                <h2 class="titre-accent">{{$categorie->nom}}</h2>
                <h2 class="titre2"> </h2>
            </div>
            <div>
                <ul class="menu4"> 
                    @include("entreprises.liste", ['entreprises'=>$categorie->entreprises])
                </ul>
            </div>
        </section>
    </main>
    <!-- Footer de la page -->
    <footer>
        <section class="infolettre">
            <div class="container-titre detectAnim">
                <h2 class="titre1">Restez</h2>
                <h2 class="titre-accent">À JOUR</h2>
                <h2 class="titre2">avec Agrotourisme Laurentides!</h2>
            </div>
            <div class="container-bouton">
                <a href="{{route('register')}}">
                Créer mon compte
                </a>
            </div>
        </section>
        <section class="partenaires">
            <h2>Voici nos partenaires</h2>
        </section>
    </footer>
</div>
<script src="{{ URL::asset('felixJs/Menu.js') }}"></script>
<script src="{{ URL::asset('felixJs/Animations.js') }}"></script>
<script src="{{ URL::asset('felixJs/Calendrier.js') }}"></script>
</body>
</html>