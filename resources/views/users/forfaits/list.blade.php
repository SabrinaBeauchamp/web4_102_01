
@foreach($forfaits as $forfait)
<div class="carteGestionMembre">
    <img src="{{asset('williamCSS\temporaire_img\profilPlaceholder.png')}}" alt="" class="imgCarteGestion">
    <li>
        <span class="btn3 entrepriseNom"> 
        
            {{$forfait->nom}}
            @if (Auth::check())
                @if($forfait->isLiked)
                    <button data-like="{{route('forfaits.like', $forfait)}}" data-dislike="{{route('forfaits.dislike', $forfait)}}" class="like_user liked fa-solid fa-heart"></button>
                @else
                    <button data-like="{{route('forfaits.like', $forfait)}}" data-dislike="{{route('forfaits.dislike', $forfait)}}" class="like_user fa-regular fa-heart"></button>
                @endif
            @else
                <button class="like_user">
                    <a href="{{route('login')}}"><i class="fa-solid fa-heart iconeListeForfaits"></i></a>
                </button> 
            @endif
            </span>
    </li>
    <button class="btnModifMembre">
        <a href="{{route('forfaits.edit', $forfait)}}"> Modifier ce forfait</a>
    <i class="fa-solid fa-user-gear"></i>
    </button>
    <button>
        <a href="{{route('forfaits.delete', $forfait)}}">Supprimer ce forfait</a>
    <i class="fa-solid fa-user-minus"></i>
    </button>
</div>

@endforeach