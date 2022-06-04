@csrf
<div class="conteneurEntreprise1">
    <h3>Formulaire categorie</h3>
    <x-champ-text name="nom" label="Nom">{{$categorie->nom}}</x-champs-text>
</div>
    <div class="conteneurEntreprise2">
        <label for="groupe_id">Groupe</label>
        @include("groupes.select", ['selected'=>$categorie->groupe_id])
    </div>
    <div class="conteneurEntreprise3">
        <label for="entreprise_id">Entreprise(s)</label>
        @include('entreprises.checklist', ['checkeds'=>$categorie->entreprises->pluck("id")->toArray()])
    </div>