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
                <div class="panneau isPanneau panneau-close">
                    <h2>Catégories</h2>
                    <ul class="menu1">
                        @foreach($groupes as $groupe)
                            <li>
                                <button class="btn1">
                                    <a href="{{route('groupes.show', ['groupe'=>$groupe])}}">{{$groupe['nom']}}</a>
                                </button>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="panneau2 isPanneau panneau-close">
                        <h2>{{$groupeSelectionner->nom}}</h2>
                        <ul class="menu2"> 
                            @include("categories.liste", ['categories'=>$groupeSelectionner->categories])
                        </ul>
                    </div>
                <div class="panneau3 isPanneau panneau-close">
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
        <h1>{{$entreprise->nom}}</h1>
    </header>
    <!-- Fil d'Ariane -->
    <div class="fil-ariane">
        <ul>
            <li><a href="#">Accueil</a></li>
            <li>></li>
            <li><a href="#">{{$groupeSelectionner->nom}}</a></li>
            <li>></li>
            <li><a href="#">{{$categorie->nom}}</a></li>
            <li>></li>
            <li><a href="#">{{$entreprise->nom}}</a></li>
        </ul>
    </div>
    <!-- Contenu principal -->
    <main>
        <section class="introduction-entreprise">
            <div class="container-titre detectAnim">
                <h2 class="titre1">Information sur l'entreprise </h2>
                <h2 class="titre-accent">{{$entreprise->nom}}</h2>
                <h2 class="titre2"></h2>
            </div>
            <div class="container-introduction">
                <p class="paragraphe">Integer ac molestie orci, non maximus orci. Etiam sit amet rhoncus lorem. Phasellus sed commodo nisl. Fusce gravida arcu non dignissim mollis. Integer iaculis ut lectus luctus blandit. Curabitur lacus velit, convallis vitae vehicula eu, luctus id metus. Duis auctor sem justo, et lobortis sem accumsan vitae.</p>
                <div class="container-img-introduction detectAnim3">
                    <img src="/images/Placeholder.svg" alt="placeholder" class="image1">
                    <img src="/images/Placeholder.svg" alt="placeholder" class="image2">
                    <img src="/images/Placeholder.svg" alt="placeholder" class="image3">
                    <img src="/images/Placeholder.svg" alt="placeholder" class="image4">
                    <img src="/images/Placeholder.svg" alt="placeholder" class="image5">
                </div>
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
                <button>Créer mon compte</button>
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