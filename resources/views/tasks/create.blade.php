<!-- resources/views/tasks/create.blade.php -->

@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>Create Task</h2>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" required>
            <br>
            <label for="priority">Priority:</label>
            <select name="priority" class="form-control">
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
            <br>
            <button type="submit" class="btn btn-primary">Create Task</button>
        </form>
    </div>
@endsection
