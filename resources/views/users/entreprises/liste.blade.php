@foreach($entreprises as $entreprise)
<div class="carteGestionMembre">
    @if(file_exists('img/entreprises/logos/'.$entreprise->id.'.svg'))
    <img src="{{asset('img/entreprises/logos/'.$entreprise->id.'.svg')}}" alt="" class="imgCarteGestion">
    @else
    <img src="{{asset('williamCSS\temporaire_img\profilPlaceholder.png')}}" alt="" class="imgCarteGestion">
    @endif
    <li>
        <span class="btn3 entrepriseNom"> 
        
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
            </span>
    </li>
    <button class="btnModifMembre">
        <a href="{{route('entreprises.edit', $entreprise)}}"> Modifier ce membre</a>
    <i class="fa-solid fa-user-gear"></i>
    </button>
    <button>
        <a href="{{route('entreprises.delete', $entreprise)}}">Supprimer ce membre</a>
    <i class="fa-solid fa-user-minus"></i>
    </button>
</div>

@endforeach