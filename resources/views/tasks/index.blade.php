<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>Tasks List</h2>
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <strong>Title:</strong> {{ $task->title }}<br>
                    <strong>Priority:</strong> {{ $task->priority }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
