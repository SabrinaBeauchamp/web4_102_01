@csrf
    <x-champ-text name="nom" label="Nom">{{$evenement->nom}}</x-champs-text>
    <x-champ-number name="prix" label="Prix d'entrée">{{$evenement->prix}}</x-champ-number>
    <x-champ-textArea name="description" label="Description">{{$evenement->description}}</x-champs-text>
        