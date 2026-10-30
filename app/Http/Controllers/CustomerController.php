<?php
namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create() {
        return view('customers.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:customers,email',
        ]);

        Customer::create($validated);
        return redirect('/customers')->with('success', 'Customer created successfully!');
    }

    public function edit(Customer $customer) {
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer) {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:customers,email,' . $customer->id,
        ]);

        $customer->update($validated);
        return redirect('/customers')->with('success', 'Customer updated successfully!');
    }
}