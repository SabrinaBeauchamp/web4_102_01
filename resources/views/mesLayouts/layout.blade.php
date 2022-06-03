<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('williamCSS/style.css')}}">
    <script src="{{asset('https://kit.fontawesome.com/f4e3a6480f.js')}}" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="{{asset('')}}"> -->
    <script src="{{asset('js/Favori.js')}}"></script>
    <script src="{{asset('js/Populaire.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{asset('felixCss/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield("titre")</title>
</head>
<body>
    <div class="interface">
        <div id="container-menu">
            <nav id="nav-principale">
                <div class="zone-btn isPanneau panneau-open">
                    <div class="container-btn-ouvrirPanneau">
                        <i class="btn-ouvrirPanneau" tabindex="0"></i>
                    </div>
                </div>
                <!-- PANNEAUX -->
                <div class="container-panneau">
                   @yield('panneaux0')
                    @yield('panneaux')
                </div>
            </nav>
        </div>
        <header id="header">
            <div class="slide1">
                <img src="{{asset('images/Placeholder.svg')}}" alt="logo">
            </div>
            <div class="container-slides">
                <div class="slide2">
                    <div class="slide3"></div>
                    <a class="titre" href="{{asset('')}}">@yield("titre")</a>
                </div>
            </div>
            <div class="bg-header">
                <img class="bg-header-img" src="{{asset('images/placeholderHeader.jpg')}}" alt="image header">
            </div>
        </header>
        <!-- Fil d'Ariane -->
        <div class="fil-ariane">
            <ul>
                <li><a href="{{route('acceuil')}}">Accueil</a></li>
                @yield("arial")
            </ul>
        </div>
        <main>
            @yield("contenu")
        </main>
        <!-- Footer de la page -->
        <footer>
            <div class="footer1">
                <section class="rechercheAvancee">
                    <div class="container-titre detectAnim">
                        <h2 class="titre1">Vous </h2>
                        <h2 class="titre-accent">CHERCHEZ</h2>
                        <h2 class="titre2">quelque chose en particulier?</h2>
                    </div>
                    <div class="container-bouton">
                        <a href="{{route('recherche.rechercheAvancee')}}">Recherche Avancée</a>
                    </div>
                </section>
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
            </div>
            <section class="partenaires">
                <h2>Voici nos partenaires</h2>
            </section>
        </footer>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<script src="{{ URL::asset('felixJs/Menu.js') }}"></script>
<script src="{{ URL::asset('felixJs/Animations.js') }}"></script>
<script src="{{ URL::asset('felixJs/Calendrier.js') }}"></script>
<script src="{{ URL::asset('felixJs/Carte.js') }}"></script>
<script src="{{asset('js\forfaitListeAnim.js')}}"></script>
</html>