@csrf
<div class="conteneurEntreprise1">
    <h3>Formulaire évènement </h3>
    <x-champ-text name="nom" label="Nom">{{$evenement->nom}}</x-champs-text>
    <x-champ-text name="prix" label="Prix d'entrée">{{$evenement->prix}}</x-champ-text>
    <x-champ-textArea name="description" label="Description">{{$evenement->description}}</x-champs-text>
    <x-champ-date name="start" label="Début de l'évènement" value="{{$evenement->start}}"></x-champ-date>
    <x-champ-date name="end" label="Fin de l'évènement" value="{{$evenement->end}}"></x-champ-date>
    <x-champ-text name="specification" label="Spécification">{{$evenement->specification}}</x-champs-text>
</div>
        