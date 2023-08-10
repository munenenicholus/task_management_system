<!-- resources/views/tasks/assign.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Assign Task</h2>
        <form action="{{ route('tasks.assign', $task->id) }}" method="POST">
            @csrf
            <label for="employee_id">Assign To:</label>
            <select name="employee_id">
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                @endforeach
            </select>
            <br>
            <button type="submit">Assign Task</button>
        </form>
    </div>
@endsection
