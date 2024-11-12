<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBillingRequest;
use App\Http\Requests\UpdateBillingRequest;
use App\Models\Billing;
use App\Models\Customer;
use App\Models\Service;
use App\Models\Technician;

class BillingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.billing.index')->with([
            'billing' => Billing::latest()->paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.billing.create')->with([
            'technicians' => Technician::all(),
            'services' => Service::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBillingRequest $request)
    {
        // Create new Customer
        $customer = Customer::firstOrCreate([
            'first_name' => $request->first_name,
            'phone' => $request->phone,
        ]);

        // Create New Bill
        // dd($request->all());

        Billing::create([
            'customer_id' => $customer->id,
            'technician_id' => $request->technician_id,
            'service_id' => $request->service_id,
            'device_name' => $request->device_name,
            'amount' => $request->amount,
            'purchase_price' => $request->purchase_price,
            'payment_method' => $request->payment_method,
            'comment' => $request->comment,
        ]);

        return redirect()->route('billings.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Billing $billing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Billing $billing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBillingRequest $request, Billing $billing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Billing $billing)
    {
        //
    }
}
