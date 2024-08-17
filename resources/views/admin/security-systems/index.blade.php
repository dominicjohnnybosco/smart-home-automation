@extends('layouts.admin')

@section('content')
    <h1>Security Systems</h1>
    <a href="{{ route('security-systems.create') }}" class="btn btn-primary mb-3">Add New Security System</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($securitySystems as $system)
                <tr>
                    <td>{{ $system->id }}</td>
                    <td>{{ $system->name }}</td>
                    <td>{{ $system->armed ? 'Armed' : 'Disarmed' }}</td>
                    <td>
                        <a href="{{ route('security-systems.edit', $system->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('security-systems.destroy', $system->id) }}" method="POST" class="d-inline">
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
