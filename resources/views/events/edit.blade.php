@extends('layouts.app')

@section('content')
    <h1>Edit Event: {{ $event->title }}</h1>
    
    <form action="{{ route('events.update', $event) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $event->title }}" required>
        <!-- Add other form fields with values from the event model -->
        <button type="submit">Update Event</button>
    </form>
@endsection
