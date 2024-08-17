@extends('layouts.admin')

@section('content')
    <h1>Lights</h1>
    <a href="{{ route('lights.create') }}" class="btn btn-primary mb-3">Add New Light</a>
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
            @foreach($lights as $light)
                <tr>
                    <td>{{ $light->id }}</td>
                    <td>{{ $light->name }}</td>
                    <td>{{ $light->status ? 'On' : 'Off' }}</td>
                    <td>
                        <a href="{{ route('lights.edit', $light->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('lights.destroy', $light->id) }}" method="POST" class="d-inline">
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
