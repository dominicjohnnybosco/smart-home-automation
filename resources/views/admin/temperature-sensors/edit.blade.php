@extends('layouts.admin')

@section('content')
    <h1>Edit Sensor</h1>
    <form action="{{ route('temperature-sensors.update', $sensor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $sensor->name }}" required>
        </div>
        <div class="form-group">
            <label for="temperature">Temperature</label>
            <input type="number" class="form-control" id="temperature" name="temperature" value="{{ $sensor->temperature }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
