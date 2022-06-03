<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page forfait 1.1</title>
    <link rel="stylesheet" href="{{asset('williamCSS/style.css')}}">
    <script src="https://kit.fontawesome.com/f4e3a6480f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{asset('felixCss/style.css')}}">
    <!-- INCLURE LES SCRIPTS QUI SONT A LA FIN DU DOC SINON CAROUSEL MARCHE PAS -->
</head>

<body>
    <div id="container-menu">
        <nav id="nav-principale">
            <div class="zone-btn isPanneau panneau-open">
                <div class="container-btn-ouvrirPanneau">
                    <i class="btn-ouvrirPanneau" tabindex="0"></i>
                </div>
            </div>
            <!-- PANNEAUX -->
            <div class="container-panneau">
                <div class="panneau0 isPanneau panneau-close">
                    <ul class="menu0">
                        <li>
                            <a class="btn1" href="{{route('accueil')}}">Accueil</a>
                        </li>
                        <li>
                            <a class="btn1" href="{{route('categoriesRegion.index')}}">MRC</a>
                        </li>
                        <li>
                            <a class="btn1" href="{{route('forfaits.categories.index')}}">Catégories</a>
                        </li>
                        <li>
                            <a class="btn1" href="{{route('evenements.index')}}">Évènements</a>
                        </li>
                        @if(Auth::user())
                            <li><a href="{{route('users.gestionaires.index')}}">Compte</a></li>
                            <li>
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button class="btn1" type="submit">Deconnexion</button>
                                </form>
                            </li>
                        @else
                            <li>
                                <a class="btn1" href="{{route('login')}}">Me connecter</a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="panneau isPanneau panneau-close">
                    <h2>Groupes</h2>
                    <ul class="menu1">
                        @foreach($groupes as $groupe)
                            <li>
                                <a href="{{route('groupes.show', ['groupe'=>$groupe])}}" class="btn1">{{$groupe['nom']}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @yield('panneaux')
            </div>
        </nav>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        @yield('contenu')
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="textCarouselIcon">Précédent</span>
            <span class="carousel-control-prev-icon" aria-hidden="false"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="false"></span>
            <span class="">Prochain</span>
        </button>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<script src="{{asset('js/forfaitListeAnim.js')}}"></script>
<script src="{{ URL::asset('felixJs/Menu.js') }}"></script>

</html>