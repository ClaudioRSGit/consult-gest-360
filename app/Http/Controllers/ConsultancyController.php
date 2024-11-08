<?php

namespace App\Http\Controllers;

use App\Models\Consultancy;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ConsultancyController extends Controller
{
    public function index()
    {
        return response()->json(Consultancy::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_uuid' => 'required|uuid|exists:clients,uuid',
            'user_uuid' => 'required|uuid|exists:users,uuid',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'status' => 'required|string'
        ]);

        $validated['uuid'] = Str::uuid();
        $consultancy = Consultancy::create($validated);
        return response()->json($consultancy, 201);
    }

    public function show($id)
    {
        $consultancy = Consultancy::findOrFail($id);
        return response()->json($consultancy, 200);
    }

    public function update(Request $request, $id)
    {
        $consultancy = Consultancy::findOrFail($id);

        $validated = $request->validate([
            'client_uuid' => 'sometimes|required|uuid|exists:clients,uuid',
            'user_uuid' => 'sometimes|required|uuid|exists:users,uuid',
            'description' => 'sometimes|required|string',
            'start_date' => 'sometimes|required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'status' => 'sometimes|required|string'
        ]);

        $consultancy->update($validated);
        return response()->json($consultancy, 200);
    }

    public function destroy($id)
    {
        $consultancy = Consultancy::findOrFail($id);
        $consultancy->delete();
        return response()->json(null, 204);
    }
}
