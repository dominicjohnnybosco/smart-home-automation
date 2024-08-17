@extends('layouts.admin')

@section('content')
    <h1>Edit Light</h1>
    <form action="{{ route('lights.update', $light->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $light->name }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="1" {{ $light->status ? 'selected' : '' }}>On</option>
                <option value="0" {{ !$light->status ? 'selected' : '' }}>Off</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
