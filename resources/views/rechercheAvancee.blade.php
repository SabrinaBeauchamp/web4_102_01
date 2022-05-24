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
    <title>Web 4 synthèse | Recherche Filtrée</title>
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
                            <li>
                                <button class="btn1">
                                    Agriculture
                                </button>
                            </li>
                            <li>
                                <button class="btn1">
                                    Groupe
                                </button>
                            </li>
                            <li>
                                <button class="btn1">
                                    Groupe
                                </button>
                            </li>
                            <li>
                                <button class="btn1">
                                    Groupe
                                </button>
                            </li>
                            <li>
                                <button class="btn1">
                                    Groupe
                                </button>
                            </li>
                            <li>
                                <button class="btn1">
                                    Groupe
                                </button>
                            </li>
                            <li>
                                <button class="btn1">
                                    Groupe
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="panneau2 isPanneau panneau-close">
                        <h2>Groupes</h2>
                        <ul class="menu2">
                            <li>
                                <button class="btn2">
                                    Agriculture
                                </button>
                            </li>
                            <li>
                                <button class="btn2">
                                    Groupe
                                </button>
                            </li>
                            <li>
                                <button class="btn2">
                                    Groupe
                                </button>
                            </li>
                            <li>
                                <button class="btn2">
                                    Groupe
                                </button>
                            </li>
                            <li>
                                <button class="btn2">
                                    Groupe
                                </button>
                            </li>
                            <li>
                                <button class="btn2">
                                    Groupe
                                </button>
                            </li>
                            <li>
                                <button class="btn2">
                                    Groupe
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="panneau3 isPanneau panneau-close">
                        <h2>Groupes</h2>
                        <ul class="menu3">
                            <li>
                                <button class="btn3">
                                    Agriculture
                                </button>
                            </li>
                            <li>
                                <button class="btn3">
                                    Groupe
                                </button>
                            </li>
                            <li>
                                <button class="btn3">
                                    Groupe
                                </button>
                            </li>
                            <li>
                                <button class="btn3">
                                    Groupe
                                </button>
                            </li>
                            <li>
                                <button class="btn3">
                                    Groupe
                                </button>
                            </li>
                            <li>
                                <button class="btn3">
                                    Groupe
                                </button>
                            </li>
                            <li>
                                <button class="btn3">
                                    Groupe
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Header -->
        <header id="mainHeader">
            <section class="rechercheFiltree">
                <h1>Recherche Avancée</h1>
                <form action="{{route('recherche.rechercheEntreprise')}}" method="get">
                <input type="text" name="q" id="q" placeholder=" j'ai faim" class="barreRecherche">   
                    <div class="filtresEtResultats">
                        <!-- <fieldset>
                            <label class="container">Agriculture
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Agriculture
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Agriculture
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Agriculture
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Agriculture
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Agriculture
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Recherches Populaires
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </fieldset> -->
                        @include('groupes.checkbox')
                        <div class="resultats">
                        @include('recherche')
                            <!-- <p>Resultat 1</p>
                            <p>mhmmm soup</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>hand it over, your dark soul</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>AAAAAAAAAAAAAAAARGH</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>hi</p>
                            <p>Resultat 1</p>
                            <p>POUTINE POUTINE POUTINE</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>jesus loves you, but he doesnt get you valentines chocolate</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>why do we have to do this</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p>
                            <p>Resultat 1</p> -->
                        </div>
                    </div>
                    <button>Rechercher</button>
                </form>

            </section>
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
                        <img src="../../public/images/Placeholder.svg" alt="placeholder" class="image1">
                        <img src="../../public/images/Placeholder.svg" alt="placeholder" class="image2">
                        <img src="../../public/images/Placeholder.svg" alt="placeholder" class="image3">
                    </div>
                    <p class="paragraphe">Integer ac molestie orci, non maximus orci. Etiam sit amet rhoncus lorem. Phasellus sed commodo nisl. Fusce gravida arcu non dignissim mollis. Integer iaculis ut lectus luctus blandit. Curabitur lacus velit, convallis vitae vehicula eu, luctus id metus. Duis auctor sem justo, et lobortis sem accumsan vitae.</p>
                </div>
            </section>
        </main>
        <!-- Footer de la page -->
        <footer>
            <h2>Ceci est un footer</h2>
            <section class="infolettre">
                <h2>Ceci est une infolettre</h2>
            </section>
            <section class="partenaires">
                <h2>Voici nos partenaires</h2>
            </section>
        </footer>
    </div>
    <script src="felixJs/Menu.js"></script>
        <script src="felixJs/Animations.js"></script>
    </body>
    </html>