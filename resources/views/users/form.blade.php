@csrf
    <x-champ-text name="name" label="Nom et prenom">{{Auth::user()->name}}</x-champs-text>
    <x-champ-text name="email" label="Email">{{Auth::user()->email}}</x-champs-text>
    <x-champ-text name="telephone" label="Téléphone">{{Auth::user()->telephone}}</x-champ-text>
    <x-champ-text name="adresse" label="Adresse">{{Auth::user()->adresse}}</x-champ-text>
    <x-champ-text name="code_postal" label="Code Postal">{{Auth::user()->code_postal}}</x-champ-text>