@extends('mesLayouts.layout')

@section('titre')
hello
@endsection

@section('contenu')
    <!-- Contenu principal -->
        <section class="introduction">
            <div class="container-titre detectAnim">
                <h2 class="titre1">Les Laurentides, un territoire </h2>
                <h2 class="titre-accent">GOURMAND!</h2>
                <h2 class="titre2"></h2>
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
        <section class="introduction">
            <h2 class="titre1">Recherche Avancée</h2>
            <a href="{{route('recherche.rechercheAvancee')}}">Cliquer ici</a>
            <div class="container-titre">
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
                                @if(file_exists('img/entreprises/'.$entreprisePopulaire->id.'.jpg'))
                                    <img src="{{asset('images/PlaceholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
                                @else
                                    <img src="{{asset('img/entreprises/'.$entreprisePopulaire->id.'.jpg')}}" alt="image de l'entreprise" class="image-evenement">
                                @endif
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
                                <h3>{{$premierLogement->nom}}</h3>
                                <p>{{$premierLogement->description}}</p>
                            </div>
                            @if(file_exists('img/entreprises/'.$premierLogement->id.'.jpg'))
                                <img src="{{asset('images/PlaceholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
                            @else
                                <img src="{{asset('img/entreprises/'.$premierLogement->id.'.jpg')}}" alt="image de l'entreprise" class="image-evenement">
                            @endif
                        </div>
                    </li>
                    <li class="item">
                        <div class="propositionLogement">
                            <div class="propositionLogement-container-texte">
                                <h3>{{$deuxiemeLogement->nom}}</h3>
                                <p>{{$deuxiemeLogement->description}}</p>
                            </div>
                            @if(file_exists('img/entreprises/'.$deuxiemeLogement->id.'.jpg'))
                                <img src="{{asset('images/PlaceholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
                            @else
                                <img src="{{asset('img/entreprises/'.$deuxiemeLogement->id.'.jpg')}}" alt="image de l'entreprise" class="image-evenement">
                            @endif
                        </div>
                    </li>
                    <li class="item">
                        <div class="propositionLogement">
                            <div class="propositionLogement-container-texte">
                                <h3>{{$troisiemeLogement->nom}}</h3>
                                <p>{{$troisiemeLogement->description}}</p>
                            </div>
                            @if(file_exists('img/entreprises/'.$troisiemeLogement->id.'.jpg'))
                                <img src="{{asset('images/PlaceholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
                            @else
                                <img src="{{asset('img/entreprises/'.$troisiemeLogement->id.'.jpg')}}" alt="image de l'entreprise" class="image-evenement">
                            @endif
                        </div>
                    </li>
                </ul>
            </div>
        </section>
@endsection
