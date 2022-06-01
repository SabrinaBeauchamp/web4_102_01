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
                            <li>
                                <button class="btn1">
                                    <a href="{{route('categoriesRegion.index')}}">MRC</a>
                                </button>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Header -->
    <header id="mainHeader">
        <h1>hello</h1>
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
        <section class="introduction">
            <div class="container-titre detectAnim">
                <h2 class="titre1">Recherche Avancée</h2>
                <a href="{{route('recherche.rechercheAvancee')}}">Cliquer ici</a>
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
                    @foreach($entreprisesPopulaires as $entreprisePopulaire)
                        <li class="item-carrousel">
                            <div class="activitePopulaire">
                                <div class="activitePopulaire-container-texte">
                                    <h3>{{$entreprisePopulaire->nom}}</h3>
                                    <p>{{$entreprisePopulaire->description}}</p>
                                </div>
                                <img src="{{asset('images/placeholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
        <section class="calendrierEvenements">
            <div class="container-titre detectAnim">
                <h2 class="titre1">Calendrier des</h2>
                <h2 class="titre-accent">EVENEMENTS</h2>
                <h2 class="titre2"></h2>
            </div>
            <div class="container-calendrier">
                <div class="calendrier-grid">
                    <div class="calendrier-item"></div>
                    <div class="calendrier-item"></div>
                    <div class="calendrier-item">1
                        <div class="popup">
                            <div class="nom-evenement">
                                NOM DE L'EVENEMENT
                            </div>
                            <div class="dates-evenement">
                                XX mois au XX mois
                            </div>
                            <div class="description-evenement">
                                Vestibulum non ipsum ut ipsum facilisis scelerisque ut non metus. Sed quis ligula ut massa ultrices congue. 
                            </div>
                            <div class="prix-evenement">
                                28.98$
                                /jour/personne
                            </div>
                        </div>
                        <div class="popup">
                            <div class="nom-evenement">
                                NOM DE L'EVENEMENT
                            </div>
                            <div class="dates-evenement">
                                XX mois au XX mois
                            </div>
                            <div class="description-evenement">
                                Vestibulum non ipsum ut ipsum facilisis scelerisque ut non metus. Sed quis ligula ut massa ultrices congue. 
                            </div>
                            <div class="prix-evenement">
                                28.98$
                                /jour/personne
                            </div>
                        </div>
                    </div>
                    <div class="calendrier-item">2
                        <div class="popup">
                            <div class="nom-evenement">
                                NOM DE L'EVENEMENT
                            </div>
                            <div class="dates-evenement">
                                XX mois au XX mois
                            </div>
                            <div class="description-evenement">
                                Vestibulum non ipsum ut ipsum facilisis scelerisque ut non metus. Sed quis ligula ut massa ultrices congue. 
                            </div>
                            <div class="prix-evenement">
                                28.98$
                                /jour/personne
                            </div>
                        </div>
                        <div class="popup">
                            <div class="nom-evenement">
                                NOM DE L'EVENEMENT
                            </div>
                            <div class="dates-evenement">
                                XX mois au XX mois
                            </div>
                            <div class="description-evenement">
                                Vestibulum non ipsum ut ipsum facilisis scelerisque ut non metus. Sed quis ligula ut massa ultrices congue. 
                            </div>
                            <div class="prix-evenement">
                                28.98$
                                /jour/personne
                            </div>
                        </div>
                        <div class="popup">
                            <div class="nom-evenement">
                                NOM DE L'EVENEMENT
                            </div>
                            <div class="dates-evenement">
                                XX mois au XX mois
                            </div>
                            <div class="description-evenement">
                                Vestibulum non ipsum ut ipsum facilisis scelerisque ut non metus. Sed quis ligula ut massa ultrices congue. 
                            </div>
                            <div class="prix-evenement">
                                28.98$
                                /jour/personne
                            </div>
                        </div>
                    </div>
                    <div class="calendrier-item">3<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">4<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">5<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">6<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">7<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">8<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">9<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">10<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">11<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">12<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">13<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">14<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">15<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">16<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">17<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">18<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">19<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">20<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">21<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">22<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">23<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">24<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">25<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">26<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">27<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">28<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">29<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">30<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">31<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item"></div>
                    <div class="calendrier-item"></div>
                </div>
                <div class="calendrier-popup">
                    e
                </div>
            </div>
        </section>
        <section class="propositionsLogements">
            <div class="container-titre detectAnim">
                <h2 class="titre1">Ou se</h2>
                <h2 class="titre-accent">LOGER</h2>
                <h2 class="titre2"></h2>
            </div>
            <div id="container">
                <ul class="liste">
                    <li class="item">
                        <div class="propositionLogement">
                            <div class="propositionLogement-container-texte">
                                <h3>Option de logement</h3>
                                <p>Depuis au moins trente-six secondes, cette activité est devenue un incontournable pour beaucoup d'amateur de l'agrotourisme dans les Laurentides</p>
                            </div>
                            <img src="{{asset('images/placeholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
                        </div>
                    </li>
                    <li class="item">
                        <div class="propositionLogement">
                            <div class="propositionLogement-container-texte">
                                <h3>Option de logement</h3>
                                <p>Depuis au moins trente-six secondes, cette activité est devenue un incontournable pour beaucoup d'amateur de l'agrotourisme dans les Laurentides</p>
                            </div>
                            <img src="{{asset('images/placeholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
                        </div>
                    </li>
                    <li class="item">
                        <div class="propositionLogement">
                            <div class="propositionLogement-container-texte">
                                <h3>Option de logement</h3>
                                <p>Depuis au moins trente-six secondes, cette activité est devenue un incontournable pour beaucoup d'amateur de l'agrotourisme dans les Laurentides</p>
                            </div>
                            <img src="{{asset('images/placeholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
                        </div>
                    </li>
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
