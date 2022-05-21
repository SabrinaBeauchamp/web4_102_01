<h1>Recherche Avancée</h1>
<form action="{{route('recherche.rechercheEntreprise')}}" method="get">
        <input type="text" name="q" id="q">
        <br>
        @foreach($groupes as $groupe)
            <label for="groupe">{{$groupe['nom']}}</label>
            <input type="checkbox" name="groupe" id="{{$groupe['id']}}" value="{{$groupe['id']}}">
        @endforeach
        <button>Rechercher</button>
</form>
@include('recherche')