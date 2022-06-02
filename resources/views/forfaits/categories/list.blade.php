@for ($i = 0; $i < $categories->count(); $i++)
    @if ($i === 0)
        <div class="carousel-item active">
            @if(file_exists('img/forfaits/categories/'.$categories[$i]->id.'.jpg'))
            <img src="{{asset('img/forfaits/categories/'.$categories[$i]->id.'.jpg')}}" class="d-block w-100">
            @else
            <img src="{{asset('images/PlaceholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
            @endif
            <div class="carousel-caption d-none d-md-block">
                <h1>{{$categories[$i]->nom}}</h1>
                <p>{{$categories[$i]->phrase}}</p>
                <a href="{{route('forfaits.categories.show', $categories[$i])}}">Découvrez ses forfait</a>
            </div>
        </div>
    @else
        <div class="carousel-item">
            @if(file_exists('img/forfaits/categories/'.$categories[$i]->id.'.jpg'))
            <img src="{{asset('img/forfaits/categories/'.$categories[$i]->id.'.jpg')}}" class="d-block w-100">
            @else
            <img src="{{asset('images/PlaceholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
            @endif
            <div class="carousel-caption d-none d-md-block">
                <h1>{{$categories[$i]->nom}}</h1>
                <p>{{$categories[$i]->phrase}}</p>
                <a href="{{route('forfaits.categories.show', $categories[$i])}}">Découvrez ses forfaits</a>
            </div>
        </div>
    @endif
@endfor