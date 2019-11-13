@extends('layouts/auth')
 
@section('content')
    <h1>{{ $cours->count() }} {{ str_plural('Cour', $cours->count()) }}</h1>

    {{--  <p><a href="{{ route('events.create') }}">Créer un évènement</a></p>  --}}

    @if(! $cours->isEmpty())
    <ul>  
        @foreach ($cours as $cour)
        <li>  
            <a href="{{ route('cours.show',$cour) }}">{{ $cour->libelle_cours }}</a>
        </li>  
        @endforeach 
    </ul> 
    @else
    <p>Vous n'avez aucun cours de créer pour le moment!</p>   
    @endif

@stop