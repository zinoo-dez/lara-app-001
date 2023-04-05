<!-- resources/views/todos/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Todo</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('todos.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="todo">Todo</label>
                <input type="text" name="todo" id="todo" class="form-control" value="{{ old('title') }}" required>
            </div>



            <div class="form-check">
                <input type="checkbox" name="completed" id="completed" class="form-check-input" value="1">
                <label for="completed" class="form-check-label">Completed</label>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
