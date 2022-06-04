@csrf
<div class="conteneurEntreprise1">
    <h3>Formulaire forfait</h3>
    <x-champ-text name="nom" label="Nom">{{$forfait->nom}}</x-champs-text>
    <x-champ-number name="prix" label="Prix">{{$forfait->prix}}</x-champs-text>
    <x-champ-textArea name="description" label="Description">{{$forfait->description}}</x-champs-text>

</div>
    
        