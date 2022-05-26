@foreach ($forfaits as $forfait)
    <div class="forfait">
        <a href="{{route('forfaits.show', $forfait)}}">{{$forfait->nom}}</a>
        @if (Auth::check())
            @if($forfait->isLiked)
            <button data-like="{{route('forfaits.like', $forfait)}}" data-dislike="{{route('forfaits.dislike', $forfait)}}" class="like_user liked">Je t'aime</button>
            @else
            <button data-like="{{route('forfaits.like', $forfait)}}" data-dislike="{{route('forfaits.dislike', $forfait)}}" class="like_user">Je t'aime pu</button>
            @endif
        @else
            <button class="like_user">
                <a href="{{route('login')}}">Je t'aime</a>
            </button>
        @endif

        <x-champ-lien href="{{route('forfaits.edit', $forfait)}}" titre="Modifier"></x-champ-lien>
        <x-champ-lien href="{{route('forfaits.delete', $forfait)}}" titre="Supprimer"></x-champ-lien>
    </div> 
    
@endforeach