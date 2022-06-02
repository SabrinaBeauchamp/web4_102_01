@extends('mesLayouts.layoutCarousel')


@section('contenu')

    <div class="carousel-indicators">
        @for ($i = 0; $i < $categories->count(); $i++)
            @if ($i === 0)
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            @else
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to={{$i}}
                aria-label="Slide {{$i+1}}"></button>
            @endif
        @endfor
    </div>
    <div class="carousel-inner">
      @include('forfaits.categories.list')  
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="textCarouselIcon">Précédent</span>
        <span class="carousel-control-prev-icon" aria-hidden="false"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="false"></span>
        <span class="">Prochain</span>
    </button>

@endsection