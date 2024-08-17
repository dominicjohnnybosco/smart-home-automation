<?php

namespace App\Http\Controllers;

use App\Models\SecuritySystem;
use Illuminate\Http\Request;

class SecuritySystemController extends Controller
{
    public function index()
    {
        $securitySystems = SecuritySystem::all();
        return view('admin.security-systems.index', compact('securitySystems'));
    }

    public function create()
    {
        return view('admin.security-systems.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'armed' => 'required|boolean',
        ]);

        SecuritySystem::create($request->all());

        return redirect()->route('security-systems.index');
    }

    public function edit(SecuritySystem $system)
    {
        return view('admin.security-systems.edit', compact('system'));
    }

    public function update(Request $request, SecuritySystem $system)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required|boolean',
        ]);

        $system->update($request->all());

        return redirect()->route('security-systems.index');
    }

    public function destroy(SecuritySystem $system)
    {
        $system->delete();

        return redirect()->route('security-systems.index');
    }
}
