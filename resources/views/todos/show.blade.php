<!-- resources/views/todos/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-black">{{ $todo->title }} -> {{ $todo->id }}</h1>

        <p class="text-black">
            @if ($todo->completed)
                <span class="badge text-dark badge-success fs-5">Completed</span>
            @else
                <span class="badge text-dark badge-secondary fs-5">Incomplete</span>
            @endif
        </p>

        <div>
            {{-- <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-primary">Edit</a> --}}
            {{-- <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form> --}}
        </div>
    </div>
@endsection
