@foreach($entreprises as $entreprise)
    <p>{{$entreprise['nom']}}</p>
@endforeach
<a href="{{route('entreprises.create')}}">Ajouter une entreprise</a>