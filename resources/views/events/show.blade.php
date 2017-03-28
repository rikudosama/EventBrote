@extends('layouts/app')

@section('content')
<h1>{{$event->title }}</h1>
<p>
    {{$event->description}}
</p>
<a href="{{ route('events.edit', $event) }}" class="btn btn-default">Modifier</a>
<form action="{{ route('events.destroy', $event) }}" method="POST" class="inline-block">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <input type="submit" value="Supprimer" class="btn btn-danger">
</form>
<hr>
<p><a href="{{ route('home') }}">Tout les évènements</a></p>
@endsection
