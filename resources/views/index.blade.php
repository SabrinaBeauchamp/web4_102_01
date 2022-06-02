@extends('mesLayouts.layout')

@section('titre')
Agrotourisme Laurentides
@endsection

@section('panneaux0')
<!-- les panneaux essentiels. index et entreprise sont fermés à l'ouverture de la page -->
<div class="panneau0 isPanneau panneau-close">
    <ul class="menu0">
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
            <li>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit">Deconnexion</button>
                </form>
            </li>
        @else
            <li>
                <a href="{{route('login')}}">Me connecter</a>
            </li>
        @endif
        <li><a href="{{route('users.gestionaires.index')}}">Compte</a></li>
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
@endsection

@section('panneaux')
<!-- index n'a pas de panneaux supplémentaires -->
@endsection

@section('contenu')
    <!-- Contenu principal -->
        <section class="introduction">
            <div class="container-titre detectAnim">
                <h2 class="titre1">Les Laurentides, un territoire </h2>
                <h2 class="titre-accent">GOURMAND!</h2>
                <h2 class="titre2"> </h2>
            </div>
            <div class="container-introduction">
                <div class="container-img-introduction detectAnim2">
                    <img src="{{asset('images/Placeholder.svg')}}" alt="placeholder" class="image1">
                    <img src="{{asset('images/Placeholder.svg')}}" alt="placeholder" class="image2">
                    <img src="{{asset('images/Placeholder.svg')}}" alt="placeholder" class="image3">
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
                    @foreach($entreprisesPopulaires as $entreprisePopulaire)
                        <li class="item-carrousel">
                            <div class="activitePopulaire">
                                <div class="activitePopulaire-container-texte">
                                    <h3>{{$entreprisePopulaire->nom}}</h3>
                                    <p>{{$entreprisePopulaire->description}}</p>
                                </div>
                                <div class="image-populaires">
                                    @if(file_exists('img/entreprises/'.$entreprisePopulaire->id.'.jpg'))
                                    <img src="{{asset('img/entreprises/'.$entreprisePopulaire->id.'.jpg')}}" alt="image de l'entreprise" class="image-evenement">
                                    @else
                                    <img src="{{asset('images/PlaceholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
                                    @endif
                                </div>
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
                    <div class="calendrier-item case-evenement">15
                        <div class="popup">
                            <div class="nom-evenement">
                                Le festival Broue-nord
                            </div>
                            <div class="dates-evenement">
                                15 au 25 mai 
                            </div>
                            <div class="description-evenement">
                                Praesent in tristique tellus. Suspendisse vulputate tempus porttitor. Proin aliquam mollis lacus non pretium. 
                            </div>
                            <div class="ville-evenement">
                                Saint-Sauveur 
                            </div>
                            <div class="prix-evenement">
                                28.98$
                                /jour/personne
                            </div>
                        </div>
                    </div>
                    <div class="calendrier-item case-evenement">16
                        <div class="popup">
                            <div class="nom-evenement">
                                Le festival Broue-nord
                            </div>
                            <div class="dates-evenement">
                                15 au 25 mai 
                            </div>
                            <div class="description-evenement">
                                Praesent in tristique tellus. Suspendisse vulputate tempus porttitor. Proin aliquam mollis lacus non pretium. 
                            </div>
                            <div class="ville-evenement">
                                Saint-Sauveur 
                            </div>
                            <div class="prix-evenement">
                                28.98$
                                /jour/personne
                            </div>
                        </div>
                    </div>
                    <div class="calendrier-item case-evenement">17
                        <div class="popup">
                            <div class="nom-evenement">
                                Le festival Broue-nord
                            </div>
                            <div class="dates-evenement">
                                15 au 25 mai 
                            </div>
                            <div class="description-evenement">
                                Praesent in tristique tellus. Suspendisse vulputate tempus porttitor. Proin aliquam mollis lacus non pretium. 
                            </div>
                            <div class="ville-evenement">
                                Saint-Sauveur 
                            </div>
                            <div class="prix-evenement">
                                28.98$
                                /jour/personne
                            </div>
                        </div>
                    </div>
                    <div class="calendrier-item case-evenement">18
                        <div class="popup">
                            <div class="nom-evenement">
                                Le festival Broue-nord
                            </div>
                            <div class="dates-evenement">
                                15 au 25 mai 
                            </div>
                            <div class="description-evenement">
                                Praesent in tristique tellus. Suspendisse vulputate tempus porttitor. Proin aliquam mollis lacus non pretium. 
                            </div>
                            <div class="ville-evenement">
                                Saint-Sauveur 
                            </div>
                            <div class="prix-evenement">
                                28.98$
                                /jour/personne
                            </div>
                        </div>
                    </div>
                    <div class="calendrier-item case-evenement">19
                        <div class="popup">
                            <div class="nom-evenement">
                                Le festival Broue-nord
                            </div>
                            <div class="dates-evenement">
                                15 au 25 mai 
                            </div>
                            <div class="description-evenement">
                                Praesent in tristique tellus. Suspendisse vulputate tempus porttitor. Proin aliquam mollis lacus non pretium. 
                            </div>
                            <div class="ville-evenement">
                                Saint-Sauveur 
                            </div>
                            <div class="prix-evenement">
                                28.98$
                                /jour/personne
                            </div>
                        </div>
                    </div>
                    <div class="calendrier-item case-evenement">20
                        <div class="popup">
                            <div class="nom-evenement">
                                Le festival Broue-nord
                            </div>
                            <div class="dates-evenement">
                                15 au 25 mai 
                            </div>
                            <div class="description-evenement">
                                Praesent in tristique tellus. Suspendisse vulputate tempus porttitor. Proin aliquam mollis lacus non pretium. 
                            </div>
                            <div class="ville-evenement">
                                Saint-Sauveur 
                            </div>
                            <div class="prix-evenement">
                                28.98$
                                /jour/personne
                            </div>
                        </div>
                    </div>
                    <div class="calendrier-item case-evenement">21
                        <div class="popup">
                            <div class="nom-evenement">
                                Le festival Broue-nord
                            </div>
                            <div class="dates-evenement">
                                15 au 25 mai 
                            </div>
                            <div class="description-evenement">
                                Praesent in tristique tellus. Suspendisse vulputate tempus porttitor. Proin aliquam mollis lacus non pretium. 
                            </div>
                            <div class="ville-evenement">
                                Saint-Sauveur 
                            </div>
                            <div class="prix-evenement">
                                28.98$
                                /jour/personne
                            </div>
                        </div>
                    </div>
                    <div class="calendrier-item case-evenement">22
                        <div class="popup">
                            <div class="nom-evenement">
                                Le festival Broue-nord
                            </div>
                            <div class="dates-evenement">
                                15 au 25 mai 
                            </div>
                            <div class="description-evenement">
                                Praesent in tristique tellus. Suspendisse vulputate tempus porttitor. Proin aliquam mollis lacus non pretium. 
                            </div>
                            <div class="ville-evenement">
                                Saint-Sauveur 
                            </div>
                            <div class="prix-evenement">
                                28.98$
                                /jour/personne
                            </div>
                        </div>
                    </div>
                    <div class="calendrier-item case-evenement">23
                        <div class="popup">
                            <div class="nom-evenement">
                                Le festival Broue-nord
                            </div>
                            <div class="dates-evenement">
                                15 au 25 mai 
                            </div>
                            <div class="description-evenement">
                                Praesent in tristique tellus. Suspendisse vulputate tempus porttitor. Proin aliquam mollis lacus non pretium. 
                            </div>
                            <div class="ville-evenement">
                                Saint-Sauveur 
                            </div>
                            <div class="prix-evenement">
                                28.98$
                                /jour/personne
                            </div>
                        </div>
                    </div>
                    <div class="calendrier-item case-evenement">24
                        <div class="popup">
                            <div class="nom-evenement">
                                Le festival Broue-nord
                            </div>
                            <div class="dates-evenement">
                                15 au 25 mai 
                            </div>
                            <div class="description-evenement">
                                Praesent in tristique tellus. Suspendisse vulputate tempus porttitor. Proin aliquam mollis lacus non pretium. 
                            </div>
                            <div class="ville-evenement">
                                Saint-Sauveur 
                            </div>
                            <div class="prix-evenement">
                                28.98$
                                /jour/personne
                            </div>
                        </div>
                    </div>
                    <div class="calendrier-item case-evenement">25
                        <div class="popup">
                            <div class="nom-evenement">
                                Le festival Broue-nord
                            </div>
                            <div class="dates-evenement">
                                15 au 25 mai 
                            </div>
                            <div class="description-evenement">
                                Praesent in tristique tellus. Suspendisse vulputate tempus porttitor. Proin aliquam mollis lacus non pretium. 
                            </div>
                            <div class="ville-evenement">
                                Saint-Sauveur 
                            </div>
                            <div class="prix-evenement">
                                28.98$
                                /jour/personne
                            </div>
                        </div>
                        <div class="popup">
                            <div class="nom-evenement">
                                Le festival Broue-nord
                            </div>
                            <div class="dates-evenement">
                                15 au 25 mai 
                            </div>
                            <div class="description-evenement">
                                Praesent in tristique tellus. Suspendisse vulputate tempus porttitor. Proin aliquam mollis lacus non pretium. 
                            </div>
                            <div class="ville-evenement">
                                Saint-Sauveur 
                            </div>
                            <div class="prix-evenement">
                                28.98$
                                /jour/personne
                            </div>
                        </div>
                    </div>

                    <div class="calendrier-item">26<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">27<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">28<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">29<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">30<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item">31<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                    <div class="calendrier-item"></div>
                    <div class="calendrier-item"></div>
                    <div class="calendrier-item"></div>
                    <div class="calendrier-item"></div>
                </div>
                <div class="calendrier-popup">
                    Sélectionnez une journée en surbrillance du calendrier pour afficher les évènements du jour
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
                                <h3>{{$premierLogement->nom}}</h3>
                                <p>{{$premierLogement->description}}</p>
                            </div>
                            <div class="image-logements">
                                @if(file_exists('img/entreprises/'.$premierLogement->id.'.jpg'))
                                <img src="{{asset('img/entreprises/'.$premierLogement->id.'.jpg')}}" alt="image de l'entreprise" class="image-evenement">
                                @else
                                <img src="{{asset('images/PlaceholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
                                @endif
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="propositionLogement">
                            <div class="propositionLogement-container-texte">
                                <h3>{{$deuxiemeLogement->nom}}</h3>
                                <p>{{$deuxiemeLogement->description}}</p>
                            </div>
                            <div class="image-logements">
                                @if(file_exists('img/entreprises/'.$deuxiemeLogement->id.'.jpg'))
                                <img src="{{asset('img/entreprises/'.$deuxiemeLogement->id.'.jpg')}}" alt="image de l'entreprise" class="image-evenement">
                                @else
                                <img src="{{asset('images/PlaceholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
                                @endif
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="propositionLogement">
                            <div class="propositionLogement-container-texte">
                                <h3>{{$troisiemeLogement->nom}}</h3>
                                <p>{{$troisiemeLogement->description}}</p>
                            </div>
                            <div class="image-logements">
                                @if(file_exists('img/entreprises/'.$troisiemeLogement->id.'.jpg'))
                                <img src="{{asset('img/entreprises/'.$troisiemeLogement->id.'.jpg')}}" alt="image de l'entreprise" class="image-evenement">
                                @else
                                <img src="{{asset('images/PlaceholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
                                @endif
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
@endsection
