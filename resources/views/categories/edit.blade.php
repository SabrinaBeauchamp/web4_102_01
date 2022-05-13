<h1>Modifier une catégorie</h1>
<form action="{{route('categories.update', $categorie)}}" method="post">
    @include('categories.form')
    <div><button>Modifier la catégorie</button></div>
</form>