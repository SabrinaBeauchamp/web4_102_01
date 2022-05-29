@extends('mesLayouts.layout')

@section('titre')
    Tout mes favories
@endsection

@section('contenu')
<ul>
    @foreach($favories as $favorie)
    <li><a href="{{route('users.favories.delete', $favorie)}}"></a></li>
    @endforeach
</ul>
@endsection