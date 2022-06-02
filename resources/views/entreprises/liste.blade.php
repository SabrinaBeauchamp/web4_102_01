@foreach($entreprises as $entreprise)
    <a class="btn3" href="{{route('entreprises.show', $entreprise)}}">
        {{$entreprise->nom}}
        @if (Auth::check())
            @if($entreprise->isLiked)
                <button data-like="{{route('entreprises.like', $entreprise)}}" data-dislike="{{route('entreprises.dislike', $entreprise)}}" class="like_user liked fa-solid fa-heart"></button>
            @else
                <button data-like="{{route('entreprises.like', $entreprise)}}" data-dislike="{{route('entreprises.dislike', $entreprise)}}" class="like_user fa-regular fa-heart"></button>
            @endif
        @else
            <button class="like_user">
                <a href="{{route('login')}}"><i class="fa-solid fa-heart iconeListeForfaits"></i></a>
            </button> 
        @endif
    </a>
@endforeach