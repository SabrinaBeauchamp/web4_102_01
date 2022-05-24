@foreach ($forfaits as $forfait)
    <div class="forfait">
        <a href="{{route('forfaits.show', $forfait)}}">{{$forfait->nom}}</a>
        @if($forfait->isLiked)
        <button data-like="{{route('forfaits.like', $forfait)}}" data-dislike="{{route('forfaits.dislike', $forfait)}}" class="like_user liked">Je t'aime</button>
        @else
        <button data-like="{{route('forfaits.like', $forfait)}}" data-dislike="{{route('forfaits.dislike', $forfait)}}" class="like_user">Je t'aime pu</button>
        @endif
        <x-champ-lien href="{{route('forfaits.edit', $forfait)}}" titre="Modifier"></x-champ-lien>
        <x-champ-lien href="{{route('forfaits.delete', $forfait)}}" titre="Supprimer"></x-champ-lien>
    </div> 
    
@endforeach