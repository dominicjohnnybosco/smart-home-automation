@extends('layouts.admin')

@section('content')
    <h1>Temperature Sensors</h1>
    <a href="{{ route('temperature-sensors.create') }}" class="btn btn-primary mb-3">Add New Sensor</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Temperature</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($temperatureSensors as $sensor)
                <tr>
                    <td>{{ $sensor->id }}</td>
                    <td>{{ $sensor->name }}</td>
                    <td>{{ $sensor->temperature }}</td>
                    <td>
                        <a href="{{ route('temperature-sensors.edit', $sensor->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('temperature-sensors.destroy', $sensor->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
