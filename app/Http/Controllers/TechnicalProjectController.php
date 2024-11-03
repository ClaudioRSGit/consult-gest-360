<?php

namespace App\Http\Controllers;

use App\Models\TechnicalProject;
use Illuminate\Http\Request;

class TechnicalProjectController extends Controller
{
    public function index()
    {
        return response()->json(TechnicalProject::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'uuid' => 'required|uuid',
            'client_uuid' => 'required|uuid|exists:clients,uuid',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'status' => 'required|string'
        ]);

        $technicalProject = TechnicalProject::create($validated);
        return response()->json($technicalProject, 201);
    }

    public function show($id)
    {
        $technicalProject = TechnicalProject::findOrFail($id);
        return response()->json($technicalProject, 200);
    }

    public function update(Request $request, $id)
    {
        $technicalProject = TechnicalProject::findOrFail($id);

        $validated = $request->validate([
            'uuid' => 'sometimes|required|uuid',
            'client_uuid' => 'sometimes|required|uuid|exists:clients,uuid',
            'description' => 'sometimes|required|string',
            'start_date' => 'sometimes|required|date',
            'end_date' => 'sometimes|nullable|date',
            'status' => 'sometimes|required|string'
        ]);

        $technicalProject->update($validated);
        return response()->json($technicalProject, 200);
    }

    public function destroy($id)
    {
        $technicalProject = TechnicalProject::findOrFail($id);
        $technicalProject->delete();
        return response()->json(null, 204);
    }
}
