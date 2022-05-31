@foreach($entreprises as $entreprise)
<ul>
    <li>
        <a href="{{route('entreprises.show', $entreprise)}}">
            {{$entreprise->nom}}
        </a>
        @if (Auth::check())       
            @if($entreprise->isLiked)
            <button data-like="{{route('entreprises.like', $entreprise)}}" data-dislike="{{route('entreprises.dislike', $entreprise)}}" class="like_user liked">Je t'aime</button>
            @else
            <button data-like="{{route('entreprises.like', $entreprise)}}" data-dislike="{{route('entreprises.dislike', $entreprise)}}" class="like_user">Je t'aime pu</button>
            @endif
        @else
            <button class="like_user">
                <a href="{{route('login')}}">Je t'aime</a>
            </button>
        @endif
    </li>
</ul>
@endforeach