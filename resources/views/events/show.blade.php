@extends('layouts.app')

@section('content')
    <h1>{{ $event->title }}</h1>
    <p>Date: {{ $event->date }} at {{ $event->time }}</p>
    <p>Location: {{ $event->location }}</p>
    <p>Description: {{ $event->description }}</p>
    
    <a href="{{ route('events.edit', $event) }}">Edit Event</a>
    <form action="{{ route('events.destroy', $event) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Event</button>
    </form>
@endsection
