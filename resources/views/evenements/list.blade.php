@foreach ($evenements as $evenement)
    <div class="evenement">
        <x-champ-lien href="{{route('evenements.show', $evenement)}}" titre="{{$evenement->nom}}"></x-champ-lien>
        <div class="choix">
            <x-champ-lien href="{{route('evenements.edit', $evenement)}}" titre="Modifier"></x-champ-lien>
            <x-champ-lien href="{{route('evenements.delete', $evenement)}" titre="Supprimer"></x-champ-lien>
        </div>
    </div> 
@endforeach