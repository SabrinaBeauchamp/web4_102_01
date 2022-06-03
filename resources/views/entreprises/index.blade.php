@extends('mesLayouts.layout')

@section('titre')
<h1>Entreprises</h1>
@endsection

@section('contenu')

    @foreach($entreprises as $entreprise)
        <li>
            <a class="btn3 commodites" href="{{route('entreprises.show', $entreprise)}}">
                {{$entreprise->nom}}
            </a>
        </li>
    @endforeach
    @if(Auth::check() && Auth::user()->role === 'admin')
    <a class="boutonUniforme" href="{{route('entreprises.create')}}">Ajouter une entreprise</a>
    @endif
@endsection