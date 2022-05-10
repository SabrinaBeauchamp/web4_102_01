@extends('mesLayouts.layout')

@section('titre')
    Agrotourisme Laurentides
@endsection

@section('contenu')
<section class="introduction">
    <div class="container-titre">
        <h2>Les Laurentides, un territoire gourmand!</h2>
    </div>
    <div class="container-introduction">
        <p>Integer ac molestie orci, non maximus orci. Etiam sit amet rhoncus lorem. Phasellus sed commodo nisl. Fusce gravida arcu non dignissim mollis. Integer iaculis ut lectus luctus blandit. Curabitur lacus velit, convallis vitae vehicula eu, luctus id metus. Duis auctor sem justo, et lobortis sem accumsan vitae.</p>
    </div>
</section>
<section class="activitesPopulaires">
    <div class="container-titre">
        <h2>Les attractions les plus populaires de la saison</h2>
    </div>
    <div class="container-carrousel">
        <ul class="liste-carrousel">
            <li class="item-carrousel" id="activitePopulaire-1">
                <h3 class="titre-item-carrousel">Je suis une activité populaire</h3>
                <p class="description-item-carrousel">Probablement de la bouffe</p>
                <div class="btn-item-carrousel">
                    <a href="">
                        Visiter la page
                    </a>
                </div>
            </li>
            <li class="item-carrousel" id="activitePopulaire-2">
                <h3 class="titre-item-carrousel">Je suis aussi une activité populaire</h3>
                <p class="description-item-carrousel">Probablement de la bouffe</p>
                <div class="btn-item-carrousel">
                    <a href="">
                        Visiter la page
                    </a>
                </div>
            </li>
            <li class="item-carrousel" id="activitePopulaire-3">
                <h3 class="titre-item-carrousel">Je suis une troisième activité populaire</h3>
                <p class="description-item-carrousel">Probablement de la bouffe</p>
                <div class="btn-item-carrousel">
                    <a href="">
                        Visiter la page
                    </a>
                </div>
            </li>
            <li class="item-carrousel" id="activitePopulaire-3">
                <h3 class="titre-item-carrousel">Je suis une activité moins populaire</h3>
                <p class="description-item-carrousel">Probablement de la bouffe</p>
                <div class="btn-item-carrousel">
                    <a href="">
                        Visiter la page
                    </a>
                </div>
            </li>
            <li class="item-carrousel" id="activitePopulaire-3">
                <h3 class="titre-item-carrousel">Je suis la dernière activité populaire</h3>
                <p class="description-item-carrousel">Probablement de la bouffe</p>
                <div class="btn-item-carrousel">
                    <a href="">
                        Visiter la page
                    </a>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="calendrierEvenements">
    <div class="container-titre">
        <h2>Calendrier des évènements</h2>
    </div>
    <div class="container-calendrier">
        <ul class="calendrier">
            <li class="calendrier-item">
                <p>allo</p>
            </li>
            <li class="calendrier-item">
                <p>allo2</p>
            </li>
        </ul>
    </div>
</section>
<section class="propositionsLogements">
    <div class="container-titre">
        <h2>Où se loger</h2>
    </div>
    <div class="container-logement">
        <ul class="calendrier">
            <li class="calendrier-item">
                <p>allo</p>
            </li>
            <li class="calendrier-item">
                <p>allo2</p>
            </li>
        </ul>
    </div>
</section>
<section>
    
</section>
@endsection