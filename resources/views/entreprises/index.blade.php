@extends('mesLayouts.layout')

@section('contenu')

@foreach($entreprises as $entreprise)
    <p>{{$entreprise['nom']}}</p>
    {{var_dump($entreprise->isLiked)}}
    @if($entreprise->isLiked)
    <button data-like="{{route('entreprises.like', $entreprise)}}" data-dislike="{{route('entreprises.dislike', $entreprise)}}" class="like_user liked">Je t'aime</button>
    @else
    <button data-like="{{route('entreprises.like', $entreprise)}}" data-dislike="{{route('entreprises.dislike', $entreprise)}}" class="like_user">Je t'aime pu</button>
    @endif
@endforeach
<a href="{{route('entreprises.create')}}">Ajouter une entreprise</a>

@endsection