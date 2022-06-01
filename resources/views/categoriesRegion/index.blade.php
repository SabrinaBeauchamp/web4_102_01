<!-- <h1>MRC</h1>
<ul>
    @foreach($categoriesRegion as $categorieRegion)
        <li>
            <a href="{{route('categoriesRegion.show', ['categorieRegion'=>$categorieRegion])}}">{{$categorieRegion->nom}}</a>
        </li>
    @endforeach
</ul>
<a href="{{route('categoriesRegion.create')}}">Ajouter une MRC</a> -->

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
                    <h2>Groupes</h2>
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
            </div>
        </nav>
    </div>
    <!-- Header -->
    <header id="mainHeader">
        <h1>Carte MRC</h1>
    </header>
    <!-- Fil d'Ariane -->
    <div class="fil-ariane">
        <ul>
            <li><a href="{{route('acceuil')}}">Accueil</a></li>
        </ul>
    </div>
    <!-- Contenu principal -->
    <main>
        <section class="introduction">
            <div class="container-titre detectAnim">
                <h2 class="titre1">Les Laurentides, un territoire </h2>
                <h2 class="titre-accent">GOURMAND!</h2>
                <h2 class="titre2"></h2>
            </div>
            <div class="container-introduction">
                <div class="container-img-introduction detectAnim2">
                    <img src="/images/Placeholder.svg" alt="placeholder" class="image1">
                    <img src="/images/Placeholder.svg" alt="placeholder" class="image2">
                    <img src="/images/Placeholder.svg" alt="placeholder" class="image3">
                </div>
                <p class="paragraphe">Donec sit amet nunc hendrerit, ullamcorper mauris ut, pharetra leo. Morbi elementum cursus lacinia. Donec euismod, lacus quis dapibus ornare, turpis metus bibendum massa, accumsan dignissim felis eros non mi. Quisque suscipit pulvinar ipsum vel molestie. Donec eros purus, maximus ut metus at, finibus euismod nunc.</p>
            </div>
        </section>
        <section class="carte-interactive">
            <div class="container-titre detectAnim">
                <h2 class="titre1">La </h2>
                <h2 class="titre-accent">carte interactive</h2>
                <h2 class="titre2">des Laurentides</h2>
            </div>
            <div class="container-carte">
                <div class="carte">
                    <div class="container-liste">
                        <ul class="liste-carte">
                            @foreach($categoriesRegion as $categorieRegion)
                                <li>
                                    <img src="../../public/images/Placeholder.svg" alt="icone" class="icone-mrc">
                                    <button class="details-carte">
                                        <a href="{{route('categoriesRegion.show', ['categorieRegion'=>$categorieRegion])}}"><h2>{{$categorieRegion->nom}}</h2></a>
                                    </button>
                                </li>
                            @endforeach
                            <li class="item-liste-carte">
                                <img src="../../public/images/Placeholder.svg" alt="icone" class="icone-mrc">
                                <button class="details-carte">
                                    <h2>Détails</h2>
                                </button>
                            </li>
                            <li class="item-liste-carte">
                                <img src="../../public/images/Placeholder.svg" alt="icone" class="icone-mrc">
                                <button class="details-carte">
                                    <h2>Détails</h2>
                                </button>
                            </li>
                            <li class="item-liste-carte">
                                <img src="../../public/images/Placeholder.svg" alt="icone" class="icone-mrc">
                                <button class="details-carte">
                                    <h2>Détails</h2>
                                </button>
                            </li>
                        </ul>
                    </div>
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
                <a href="{{route('register')}}">Créer mon compte</a>
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
