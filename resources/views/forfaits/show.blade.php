@extends('mesLayouts.layout')

@section('titre')
    Forfaits - {{$forfait->nom}}
@endsection

@section('panneaux0')
    <div class="panneau0 isPanneau panneau-close">
        <ul class="menu0">
            <li>
                <a class="btn1" href="{{route('acceuil')}}">Acceuil</a>
            </li><li>
                <a class="btn1" href="{{route('categoriesRegion.index')}}">MRC</a>
            </li>
            <li>
                <a class="btn1" href="{{route('forfaits.categories.index')}}">Catégories</a>
            </li>
            <li>
                <a class="btn1" href="{{route('evenements.index')}}">Évènements</a>
            </li>
            @if(Auth::user())
                <li><a href="{{route('users.gestionaires.index')}}">Compte</a></li>
                <li>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit">Deconnexion</button>
                    </form>
                </li>
            @else
                <li>
                    <a href="{{route('login')}}">Me connecter</a>
                </li>
            @endif
        </ul>
    </div>
    <div class="panneau isPanneau panneau-close">
            <h2>Groupes</h2>
            <ul class="menu1">
                @foreach($groupes as $groupe)
                    <li>
                        <a href="{{route('groupes.show', ['groupe'=>$groupe])}}" class="btn1">{{$groupe['nom']}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
@endsection

@section('panneaux')
<!-- index n'a pas de panneaux supplémentaires -->
@endsection
    
@section('arial')
    <li>></li>
    <li><a href="{{route('forfaits.categories.show', $forfait->categorie)}}">{{$forfait->categorie->nom}}</a></li>
    <li>></li>
    <li><a href="{{route('forfaits.show', $forfait)}}">{{$forfait->nom}}</a></li>
@endsection
    
@section('contenu')
    <div class="conteneurForfaitSpecifique">
        <div class="conteneurGauche">
            <h2 class="nomForfait">{{$forfait->nom}}</h2>
            <div class="champ description">
                {{$forfait->description}}
            </div>

            <!-- pas besoin qu'il marche le btn panier -->
            <button class="btnAjoutPanier">
                <div class="prixForfait"></div>
            </button>
        </div>
        <div class="conteneurDroite">
            <div class="conteneurImg">
                @if(file_exists('img/forfaits/'.$forfait->id.'.jpg'))
                <x-champ-img src="{{asset('img/forfaits/'.$forfait->id.'.jpg')}}" alt="forfait {{$forfait->id}}"></x-champ-img>
                @else
                <img src="{{asset('images/PlaceholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
                @endif
            </div>
        </div>
    </div>
@endsection