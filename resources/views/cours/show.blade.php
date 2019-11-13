@extends('layouts/auth')

@section('content')
<h1>{{ $section }}</h1>
{{--  <p>{{ $id_cours }}</p>  --}}
{{--  <p>{{ $section->description }}</p>  --}}
{{--  <a class="btn btn-default" href="{{ route('events.edit', $event) }}">Modifier</a> 
<a href="{{ route('events.destroy', $event) }}" data-method="DELETE" data-confirm="Êtes-vous sur?"
class="btn btn-danger">Supprimer</a>   --}}
{{--  <form 
    action="{{ route('events.destroy', $event) }}" 
    method="POST" 
    class="inline-block"
    onsubmit="return confirm('Êtes-vous sur?');"
    >
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <input type="submit" value="Supprimer" class="btn btn-danger">
</form>  --}}
{{--  <a href="{{ route('events.destroy', $event) }}" data-method="DELETE" data-confirm="Ếtes-vous sur?">Supprimer</a>  --}}
<hr>
<p><a href="{{ route('sections.create', $id_cours) }}">Nouvelle section</a></p>
@stop