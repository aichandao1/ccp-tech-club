@extends('layouts.app')

@section('title', 'Activités')

@section('content')
<h1>Nos activités</h1>

<ul>
@foreach($activities as $activity)
    <li class="activity-item">

        <strong>{{ $activity['title'] }}</strong><br>

        <a href="{{ route('club.activity.show', $activity['slug']) }}">
            
            Voir détail
        </a>
    </li>
@endforeach
</ul>

@endsection