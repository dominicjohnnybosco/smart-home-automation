@extends('layouts.admin')

@section('content')
    <h1>Edit Security System</h1>
    <form action="{{ route('security-systems.update', $system->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $system->name }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="armed" name="armed" required>
                <option value="1" {{ $system->status ? 'selected' : '' }}>Armed</option>
                <option value="0" {{ !$system->status ? 'selected' : '' }}>Disarmed</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
