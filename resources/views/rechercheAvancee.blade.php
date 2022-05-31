<h1>Recherche Avancée</h1>
<form action="{{route('recherche.rechercheEntreprise')}}" method="get">
        <input type="text" name="q" id="q">
        <br>
        @include('groupes.checkbox')
        <button>Rechercher</button>
</form>
@include('recherche')