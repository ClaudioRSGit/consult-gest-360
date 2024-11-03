<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return response()->json(Payment::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'invoice_id' => 'required|exists:invoices,id',
            'amount' => 'required|numeric|min:0',
            'status' => 'required|string',
            'payment_date' => 'required|date',
            'payment_method' => 'required|string'
        ]);

        $payment = Payment::create($validated);
        return response()->json($payment, 201);
    }

    public function show($id)
    {
        $payment = Payment::findOrFail($id);
        return response()->json($payment, 200);
    }

    public function update(Request $request, $id)
    {
        $payment = Payment::findOrFail($id);

        $validated = $request->validate([
            'invoice_id' => 'sometimes|required|exists:invoices,id',
            'amount' => 'sometimes|required|numeric|min:0',
            'status' => 'sometimes|required|string',
            'payment_date' => 'sometimes|required|date',
            'payment_method' => 'sometimes|required|string'
        ]);

        $payment->update($validated);
        return response()->json($payment, 200);
    }

    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();
        return response()->json(null, 204);
    }
}
