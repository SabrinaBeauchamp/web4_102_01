<form action="{{route('entreprises.store')}}" method="post">
    @include('entreprises.form')
    @include('villes.radio', ['checked'=>$entreprise->ville_id])
    <div><button>Créer</button></div>
</form>