@extends('layouts.admin')

@section('content')
    <h1>Add New Sensor</h1>
    <form action="{{ route('temperature-sensors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="temperature">Temperature</label>
            <input type="number" class="form-control" id="temperature" name="temperature" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
