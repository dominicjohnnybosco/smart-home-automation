<?php

namespace App\Http\Controllers;

use App\Models\Light;
use App\Models\TemperatureSensor;
use App\Models\SecuritySystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // index function
    public function index() {

        dd(Auth::user->role);
        return view('admin.index');
    }

    // lights function
    public function lights() {
        $lights = Light::all();
        return view('admin.lights', compact('lights'));
    }

    // temperatureSensor function
    public function temperatureSensors() {
        $temperatureSensors = TemperatureSensor::all();
        return view('admin.temperature-sensors', compact('temperatureSensors'));
    }

    // securitySystems function
    public function securitySystems() {
        $securitySystems = SecuritySystem::all();
        return view('admin.security-systems', compact('securitySystems'));
    }
}
