<?php

namespace App\Http\Controllers;

use App\Models\ServiceReview;
use Illuminate\Http\Request;

class ServiceReviewController extends Controller
{
    public function index()
    {
        return response()->json(ServiceReview::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_uuid' => 'required|uuid|exists:clients,uuid',
            'consultancy_uuid' => 'required|uuid|exists:consultancies,uuid',
            'rating' => 'required|integer|min:1|max:5',
            'comments' => 'nullable|string'
        ]);

        $review = ServiceReview::create($validated);
        return response()->json($review, 201);
    }

    public function show($id)
    {
        $review = ServiceReview::findOrFail($id);
        return response()->json($review, 200);
    }

    public function update(Request $request, $id)
    {
        $review = ServiceReview::findOrFail($id);

        $validated = $request->validate([
            'client_uuid' => 'sometimes|required|uuid|exists:clients,uuid',
            'consultancy_uuid' => 'sometimes|required|uuid|exists:consultancies,uuid',
            'rating' => 'sometimes|required|integer|min:1|max:5',
            'comments' => 'sometimes|nullable|string'
        ]);

        $review->update($validated);
        return response()->json($review, 200);
    }

    public function destroy($id)
    {
        $review = ServiceReview::findOrFail($id);
        $review->delete();
        return response()->json(null, 204);
    }
}
