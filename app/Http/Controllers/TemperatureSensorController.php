<?php

namespace App\Http\Controllers;

use App\Models\TemperatureSensor;
use Illuminate\Http\Request;

class TemperatureSensorController extends Controller
{
    public function index()
    {
        $temperatureSensors = TemperatureSensor::all();
        return view('admin.temperature-sensors.index', compact('temperatureSensors'));
    }

    public function create()
    {
        return view('admin.temperature-sensors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'temperature' => 'required|numeric',
        ]);

        TemperatureSensor::create($request->all());

        return redirect()->route('temperature-sensors.index');
    }

    public function edit(TemperatureSensor $sensor)
    {
        return view('admin.temperature-sensors.edit', compact('sensor'));
    }

    public function update(Request $request, TemperatureSensor $sensor)
    {
        $request->validate([
            'name' => 'required',
            'temperature' => 'required|numeric',
        ]);

        $sensor->update($request->all());

        return redirect()->route('temperature-sensors.index');
    }

    public function destroy(TemperatureSensor $sensor)
    {
        $sensor->delete();

        return redirect()->route('temperature-sensors.index');
    }
}
