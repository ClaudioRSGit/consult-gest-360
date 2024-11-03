<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        return response()->json(Training::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'uuid' => 'required|uuid',
            'client_uuid' => 'required|uuid|exists:clients,uuid',
            'description' => 'required|string',
            'date' => 'required|date',
            'duration' => 'required|integer', // em horas
            'status' => 'required|string'
        ]);

        $training = Training::create($validated);
        return response()->json($training, 201);
    }

    public function show($id)
    {
        $training = Training::findOrFail($id);
        return response()->json($training, 200);
    }

    public function update(Request $request, $id)
    {
        $training = Training::findOrFail($id);

        $validated = $request->validate([
            'uuid' => 'sometimes|required|uuid',
            'client_uuid' => 'sometimes|required|uuid|exists:clients,uuid',
            'description' => 'sometimes|required|string',
            'date' => 'sometimes|required|date',
            'duration' => 'sometimes|integer', // em horas
            'status' => 'sometimes|required|string'
        ]);

        $training->update($validated);
        return response()->json($training, 200);
    }

    public function destroy($id)
    {
        $training = Training::findOrFail($id);
        $training->delete();
        return response()->json(null, 204);
    }
}
