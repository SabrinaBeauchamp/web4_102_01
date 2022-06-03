@extends('mesLayouts.dashboard')

@section('contenu gestion')

<form action="{{route('categories.store')}}" method="post">
    @include('categories.form')
    <div>
        <button>Ajouter la categorie</button>
    </div>
</form>
@endsection
