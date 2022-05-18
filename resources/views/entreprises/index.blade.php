@foreach($entreprises as $entreprise)
    <p>{{$entreprise['nom']}}</p>
    <x-champ-button type="" href="{{route('favories.show', $entreprise)}}" titre="J'aime"></x-champ-button>
    <x-champ-button type="" href="{{route('favories.delete', $entreprise)}}" titre="J'aime"></x-champ-button>
@endforeach
<a href="{{route('entreprises.create')}}">Ajouter une entreprise</a>