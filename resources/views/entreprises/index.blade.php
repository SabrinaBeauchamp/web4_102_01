@foreach($entreprises as $entreprise)
    <p>{{$entreprise['nom']}}</p>
    <button class="jaime" :click="likes">
        <p>J'aime</p>
    </button>
@endforeach
<a href="{{route('entreprises.create')}}">Ajouter une entreprise</a>