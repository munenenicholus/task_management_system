<!-- resources/views/employees/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Employees List</h2>
        <ul>
            @foreach ($employees as $employee)
                <li>
                    <strong>Name:</strong> {{ $employee->name }}<br>
                    <strong>Email:</strong> {{ $employee->email }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
