@foreach ($evenements as $evenement)
    @if ($evenement->dateNow <= $evenement->end)
    <div class="popup">
        <div class="nom-evenement">
            {{$evenement->nom}}
        </div>
        <div class="dates-evenement">
            @if($evenement->end === null)
                {{$evenement->start}}
            @else
                {{$evenement->start}} au {{$evenement->end}}
            @endif
            <p>{{$evenement->specification}}</p>
        </div>
        <div class="description-evenement">
            {{$evenement->description}} 
        </div>
        <div class="prix-evenement">
            {{$evenement->prix}} / jour / personne
        </div>
        @if (Auth::check())
        @if($evenement->isLiked)
        <button data-like="{{route('evenements.like', $evenement)}}" data-dislike="{{route('evenements.dislike', $evenement)}}" class="like_user liked fa-solid fa-heart"></button>
        @else
        <button data-like="{{route('evenements.like', $evenement)}}" data-dislike="{{route('evenements.dislike', $evenement)}}" class="like_user fa-regular fa-heart"></button>
        @endif
        @else
        <button class="like_user">
            <a href="{{route('login')}}"><i class="fa-solid fa-heart iconeListeForfaits"></i></a>
        </button> 
        @endif
    </div>
    @endif
@endforeach