<form action="{{route('categories.destroy', $categorie)}}" method="post">
    @csrf
    <p>Voulez-vous vraiment supprimer {{$categorie['nom']}}?</p>
    <div><button>Supprimer</button></div>
</form>