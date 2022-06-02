<!-- Contenu principal -->
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
               @dd($resultats)
                @foreach($resultats as $resultat)
                <p>
                    <a href="{{route($resultat->model.'.show', $resultat)}}">{{$resultat->nom}}</a>
                </p>
                @endforeach
            </div>
    </div>
</form>
</section>
