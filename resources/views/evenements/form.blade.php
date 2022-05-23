@csrf
    <x-champ-text name="nom" label="Nom">{{$evenement->nom}}</x-champs-text>
    <x-champ-text name="prix" label="Prix d'entrée">{{$evenement->prix}}$</x-champ-text>
    <x-champ-textArea name="description" label="Description">{{$evenement->description}}</x-champs-text>
        