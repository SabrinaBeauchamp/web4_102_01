@foreach ($forfaits as $forfait)
<div class="conteneurForfait">
<div class="forfait">
    <!-- changer les sources des images -->
    @if(file_exists('img/forfaits/'.$forfait->id.'.jpg'))
        <img src="{{asset('img/forfaits/'.$forfait->id.'.jgp')}}" class="d-block w-100">
    @else
        <img src="{{asset('images/PlaceholderImage.svg')}}" alt="image de forfait" class="image-evenement">
    @endif
    <!-- changer les href des a -->
    <a href="{{route('forfaits.show', $forfait)}}">{{$forfait->nom}}</a>
    <div class="forfaitRating">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star-half-stroke"></i>
        <i class="fa-regular fa-star"></i>
    </div>
    <div class="conteneurBtnOuvrir">
        <i class="fa-solid fa-chevron-up"></i>
    </div>
    <div class="conteneurBtnCarte">
        <button class="button btn_visiter btn_carte">
            <!-- href du a est le meme que a du nom forfait, aussi mettre fleche en after-->
            <a href="{{route('forfaits.show', $forfait)}}">Visiter le forfait</a>
        </button>
        @if (Auth::check())
            @if($forfait->isLiked)
            <button data-like="{{route('forfaits.like', $forfait)}}" data-dislike="{{route('forfaits.dislike', $forfait)}}" class="like_user btn_carte liked"><i class="fa-solid iconeListeForfaits"></i></button>
            @else
            <button data-like="{{route('forfaits.like', $forfait)}}" data-dislike="{{route('forfaits.dislike', $forfait)}}" class="like_user btn_carte"><i class="fa-solid fa-heart iconeListeForfaits"></i></button>
            @endif
        @else
            <button class="like_user">
                <a href="{{route('login')}}"><i class="fa-solid fa-heart iconeListeForfaits"></i></a>
            </button>
        @endif
        {{-- <button class="like_user btn_carte">
            <a href=". . ."></a>
        </button> --}}
        @if (Auth::check() && Auth::user()->role->name === 'admin')
            <!-- admin seulement ? -->
            <button class="button btn_modifier btn_carte">
                <a href="{{route('forfaits.edit', $forfait)}}"><i class="fa-solid fa-gear iconeListeForfaits"></i></a>
            </button>
            <button class="button btn_supprimer btn_carte">
                <a href="{{route('forfaits.delete', $forfait)}}"><i class="fa-solid fa-trash-can iconeListeForfaits"></i></a>
            </button>
        @endif
    </div>
</div>
</div>
    
@endforeach