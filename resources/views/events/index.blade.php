@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Events</h1>
        <a href="{{ route('events.create') }}" class="btn btn-primary">Create Event</a>
    </div>

    <ul class="list-group">
        @foreach ($events as $event)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('events.show', $event) }}">{{ $event->title }}</a>
                <div>
                    <a href="{{ route('events.edit', $event) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                    <form action="{{ route('events.destroy', $event) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

    <div class="mt-4">
        {{ $events->links() }}
    </div>
@endsection
