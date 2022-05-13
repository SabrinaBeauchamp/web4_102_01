@csrf
    <x-champ-text name="nom" label="Nom">{{$evenements->nom}}</x-champs-text>
    <x-champ-number name="prix" label="Prix">{{$evenements->prix}}</x-champs-text>
    <x-champ-text name="categorie" label="Categorie"></x-champ-text>
    <x-champ-textArea name="description" label="Description">{{$evenements->description}}</x-champs-text>
        