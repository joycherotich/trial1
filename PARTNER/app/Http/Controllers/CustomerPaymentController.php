<?php

namespace App\Http\Controllers;

use App\Models\CustomerPayment;
use Illuminate\Http\Request;

class CustomerPaymentController extends Controller
{
    public function index()
    {
        $customerPayments = CustomerPayment::all();
        return response()->json($customerPayments);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customers_id' => 'required|exists:customers,id',
            'paymentcycles_id' => 'required|exists:paymentcycles,id',
            'full_names' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'id_number' => 'required',
            'amount' => 'required|numeric',
            'payment_reference' => 'required',
            'payment_sacco' => 'required',
        ]);

        $customerPayment = CustomerPayment::create($validatedData);

        return response()->json($customerPayment, 201);
    }

    public function show(CustomerPayment $customerPayment)
    {
        return response()->json($customerPayment);
    }

    public function update(Request $request, CustomerPayment $customerPayment)
    {
        $validatedData = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'paymentcycle_id' => 'required|exists:paymentcycles,id',
            'full_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'id_number' => 'required',
            'amount' => 'required|numeric',
            'payment_reference' => 'required',
            'payment_sacco' => 'required',
        ]);

        $customerPayment->update($validatedData);

        return response()->json($customerPayment);
    }

    public function destroy(CustomerPayment $customerPayment)
    {
        $customerPayment->delete();

        return response()->json(null, 204);
    }

    
}
