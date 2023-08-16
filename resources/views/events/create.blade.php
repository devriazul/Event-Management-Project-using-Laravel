@extends('layouts.app')

@section('content')
    <h1>Create Event</h1>
    
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <!-- Add other form fields for date, time, location, and description -->
        <button type="submit">Create Event</button>
    </form>
@endsection
