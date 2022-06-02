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
    <title>@yield("titre") - Les Forfaits</title>
</head>
<body>
    <div class="interface">
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
                                <li>
                                    <button class="btn1">
                                        <a href="{{route('forfaits.categories.index')}}">Catégories</a>
                                    </button>
                                </li>
                                <li>
                                    <button class="btn1">
                                        <a href="{{route('evenements.index')}}">Évènements</a>
                                    </button>
                                </li>
                                @if(Auth::user())
                                    <li>
                                        <form action="{{route('logout')}}" method="POST">
                                            @csrf
                                            <button type="submit">Deconnexion</button>
                                        </form>
                                    </li>
                                    <li><a href="{{route('users.gestionaires.index')}}">Compte</a></li>
                                @else
                                    <li>
                                        <a href="{{route('login')}}">Me connecter</a>
                                    </li>
                                @endif
                        </ul>
                    </div>
                    @yield('menu')
                </div>
            </nav>
        </div>
        <header>
            <a href="{{asset('')}}">
                <h1 class="titre">@yield("titre")</h1>
            </a>
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
</body>
<script src="{{ URL::asset('felixJs/Menu.js') }}"></script>
<script src="{{ URL::asset('felixJs/Animations.js') }}"></script>
<script src="{{ URL::asset('felixJs/Calendrier.js') }}"></script>
</html>