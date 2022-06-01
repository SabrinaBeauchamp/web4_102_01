<!-- <h1>{{$categorieRegion->nom}}</h1>
<ul>
    @foreach($villes as $ville)
    <li>
        <a href="{{route('villes.show', ['ville'=>$ville])}}">{{$ville->nom}}</a>
    </li>
    @endforeach
</ul>
<a href="{{route('categoriesRegion.edit', ['categorieRegion'=>$categorieRegion])}}">Modifier</a> <br>
<a href="{{route('categoriesRegion.delete', ['categorieRegion'=>$categorieRegion])}}">Supprimer</a> -->

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
        <h1>{{$categorieRegion->nom}}</h1>
    </header>
    <!-- Fil d'Ariane -->
    <div class="fil-ariane">
        <ul>
            <li><a href="#">Accueil</a></li>
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
                <p class="paragraphe">Integer ac molestie orci, non maximus orci. Etiam sit amet rhoncus lorem. Phasellus sed commodo nisl. Fusce gravida arcu non dignissim mollis. Integer iaculis ut lectus luctus blandit. Curabitur lacus velit, convallis vitae vehicula eu, luctus id metus. Duis auctor sem justo, et lobortis sem accumsan vitae.</p>
            </div>
        </section>
        <section class="activitesPopulaires">
            <div class="container-titre detectAnim">
                <h2 class="titre1">Les attractions les plus</h2>
                <h2 class="titre-accent">POPULAIRES</h2>
                <h2 class="titre2">de la saison</h2>
            </div>
            <div id="container-carrousel">
                <ul class="liste-carrousel">
                    <li class="item-carrousel">
                        <div class="activitePopulaire">
                            <div class="activitePopulaire-container-texte">
                                <h3>Activité populaire</h3>
                                <p>Depuis au moins trente-six secondes, cette activité est devenue un incontournable pour beaucoup d'amateur de l'agrotourisme dans les Laurentides</p>
                            </div>
                            <img src="{{asset('images/placeholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
                        </div>
                    </li>
                    <li class="item-carrousel">
                        <div class="activitePopulaire">
                            <div class="activitePopulaire-container-texte">
                                <h3>Activité populaire</h3>
                                <p>Depuis au moins trente-six secondes, cette activité est devenue un incontournable pour beaucoup d'amateur de l'agrotourisme dans les Laurentides</p>
                            </div>
                            <img src="{{asset('images/placeholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
                        </div>
                    </li>
                    <li class="item-carrousel">
                        <div class="activitePopulaire">
                            <div class="activitePopulaire-container-texte">
                                <h3>Activité populaire</h3>
                                <p>Depuis au moins trente-six secondes, cette activité est devenue un incontournable pour beaucoup d'amateur de l'agrotourisme dans les Laurentides</p>
                            </div>
                            <img src="{{asset('images/placeholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
                        </div>
                    </li>
                    <li class="item-carrousel">
                        <div class="activitePopulaire">
                            <div class="activitePopulaire-container-texte">
                                <h3>Activité populaire</h3>
                                <p>Depuis au moins trente-six secondes, cette activité est devenue un incontournable pour beaucoup d'amateur de l'agrotourisme dans les Laurentides</p>
                            </div>
                            <img src="{{asset('images/placeholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
                        </div>
                    </li>
                    <li class="item-carrousel">
                        <div class="activitePopulaire">
                            <div class="activitePopulaire-container-texte">
                                <h3>Activité populaire</h3>
                                <p>Depuis au moins trente-six secondes, cette activité est devenue un incontournable pour beaucoup d'amateur de l'agrotourisme dans les Laurentides</p>
                            </div>
                            <img src="{{asset('images/placeholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="sous-categories">
            <div class="container-titre detectAnim">
                <h2 class="titre1">Toutes les villes dans</h2>
                <h2 class="titre-accent">{{$categorieRegion->nom}}</h2>
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