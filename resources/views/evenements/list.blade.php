@foreach ($evenements as $evenement)
    <div class="evenement">
        @if ($evenement->dateNow <= $evenement->end)
            <x-champ-lien href="{{route('evenements.show', $evenement)}}" titre="{{$evenement->nom}}"></x-champ-lien>
            @if($evenement->end === null)
                <p>{{$evenement->start}}</p>
            @else
                <p>{{$evenement->start}} à {{$evenement->end}}</p>
            @endif
            @if (Auth::check())
                @if($evenement->isLiked)
                    <button data-like="{{route('evenements.like', $evenement)}}" data-dislike="{{route('evenements.dislike', $evenement)}}" class="like_user liked">Je t'aime</button>
                @else
                    <button data-like="{{route('evenements.like', $evenement)}}" data-dislike="{{route('evenements.dislike', $evenement)}}" class="like_user">Je t'aime pu</button>
                @endif
            @else
                <button class="like_user">
                    <a href="{{route('login')}}">Je t'aime</a>
                </button> 
            @endif
            <div class="choix">
                <x-champ-lien href="{{route('evenements.edit', $evenement)}}" titre="Modifier"></x-champ-lien>
                <x-champ-lien href="{{route('evenements.delete', $evenement)}}" titre="Supprimer"></x-champ-lien>
            </div>
        @endif
    </div> 
@endforeach