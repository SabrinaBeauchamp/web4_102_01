@foreach ($evenements as $evenement)
    <div class="evenement">
        <a href="{{route('.evenements.show', $evenement)}}">{{$evenement->nom}}</a>
        <div class="choix">
            <a href="{{route('.evenements.edit', $evenement)}}">Modifier</a>
            <a href="{{route('.evenements.delete', $evenement)}}">Supprimer</a>
        </div>
    </div> 
@endforeach