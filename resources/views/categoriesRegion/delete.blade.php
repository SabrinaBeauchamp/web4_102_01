<form action="{{route('categoriesRegion.destroy', $categorieRegion)}}" method="post">
    @csrf
    <p>Voulez-vous vraiment supprimer {{$categorieRegion->nom}}?</p>
    <div><button>Supprimer</button></div>
</form>