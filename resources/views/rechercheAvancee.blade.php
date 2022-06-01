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
                                    <a href="{{route('groupes.show', ['groupe'=>$groupe])}}" class="btn1">{{$groupe['nom']}}</a>
                                </li>
                            @endforeach
                            <li>
                                <a href="{{route('categoriesRegion.index')}}" class="btn1">MRC</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Contenu principal -->
        <main>
            <section class="rechercheFiltree">
                <div class="container-titre detectAnim">
                    <h2 class="titre1">Recherche par</h2>
                    <h2 class="titre-accent">FILTRES</h2>
                    <h2 class="titre2">et mots clés</h2>
                </div>
                <form action="{{route('recherche.rechercheEntreprise')}}" method="get">
                    <input type="text" name="q" id="q" placeholder="mots-clés ici" class="barreRecherche">   
                    <div class="filtresEtResultats">                  
                        @include('groupes.checkbox')
                        <button>Rechercher</button>
                        <div class="resultats">
                            @include('recherche')
                        </div>
                </div>
            </form>
        </section>
        <!-- Fil d'Ariane -->
        <div class="fil-ariane">
            <ul>
                <li><a href="#">Accueil</a></li>
            </ul>
        </div>
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
        <script src="public/felixJs/Animations.js"></script>
    </body>
    </html>