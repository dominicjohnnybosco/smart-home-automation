@extends('layouts.admin')

@section('content')
    <h1>Add New Security System</h1>
    <form action="{{ route('security-systems.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="armed" name="armed" required>
                <option value="1">Armed</option>
                <option value="0">Disarmed</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
