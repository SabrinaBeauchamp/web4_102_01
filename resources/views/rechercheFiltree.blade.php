<h1>Recherche Avancée (filtres)</h1>

<form action="{{route('recherche.rechercheEntreprise')}}" method="get">

        <input type="text" name="q" id="q">

        <fieldset>

                <br>

                <label for="groupe"></label>

                <input type="checkbox" name="" id="" value="">

        <fieldset>

        <button>Rechercher</button>

</form>

@include('recherche')