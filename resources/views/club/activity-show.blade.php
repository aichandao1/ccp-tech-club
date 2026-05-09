@extends('layouts.app')

@section('title', $activity['title'])

@section('content')
<h1>{{ $activity['title'] }}</h1>

<p>{{ $activity['description'] }}</p>
<p>{{ $activity['body'] }}</p>

<a href="{{ route('club.activities') }}">Retour</a>
@endsection