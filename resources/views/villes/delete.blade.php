<form action="{{route('villes.destroy', $ville)}}" method="post">
    @csrf
    <p>Voulez-vous vraiment supprimer {{$ville['nom']}}?</p>
    <div><button>Supprimer</button></div>
</form>