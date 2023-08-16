@extends('layouts.app')

@section('content')
    <h1>Events</h1>
    
    <ul>
        @foreach ($events as $event)
            <li><a href="{{ route('events.show', $event) }}">{{ $event->title }}</a></li>
        @endforeach
    </ul>

    {{ $events->links() }}
@endsection
