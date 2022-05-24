@foreach ($evenements as $evenement)
    <div class="evenement">
        <x-champ-lien href="{{route('evenements.show', $evenement)}}" titre="{{$evenement->nom}}"></x-champ-lien>
        @if($evenement->isLiked)
        <button data-like="{{route('evenements.like', $evenement)}}" data-dislike="{{route('evenements.dislike', $evenement)}}" class="like_user liked">Je t'aime</button>
        @else
        <button data-like="{{route('evenements.like', $evenement)}}" data-dislike="{{route('evenements.dislike', $evenement)}}" class="like_user">Je t'aime pu</button>
        @endif
        <div class="choix">
            <x-champ-lien href="{{route('evenements.edit', $evenement)}}" titre="Modifier"></x-champ-lien>
            <x-champ-lien href="{{route('evenements.delete', $evenement)}}" titre="Supprimer"></x-champ-lien>
        </div>
    </div> 
@endforeach