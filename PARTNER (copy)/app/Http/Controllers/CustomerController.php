<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return response()->json($customers);
    }

    public function show(Customer $customer)
    {
        return response()->json($customer);
    }

    public function store(Request $request)
    {
    
        $customer = Customer::create($request->all());
    
        return response()->json($customer);
    }
    
    public function update(Request $request, Customer $customer)
    {
        $validatedData = $request->validate([
            'full_names' => 'required',
            'email' => ['required', 'email', Rule::unique('customers')->ignore($customer->id)],
            'phone_number' => ['required', Rule::unique('customers')->ignore($customer->id)],
            'id_number' => ['required', Rule::unique('customers')->ignore($customer->id)],
        ]);

        $customer->update($validatedData);

        return response()->json($customer);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
    
        return response()->json(null, 204);
    }
}
