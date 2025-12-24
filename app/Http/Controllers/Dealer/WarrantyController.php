<?php

namespace App\Http\Controllers\Dealer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BatteryRegistration;
use Illuminate\Support\Str;

class WarrantyController extends Controller
{
    public function create()
    {
        return view('dealer.register-warranty');
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'customer_mobile' => 'required',
            'battery_model' => 'required',
        ]);

        BatteryRegistration::create([
            'dealer_id' => auth()->id(),
            'customer_name' => $request->customer_name,
            'customer_mobile' => $request->customer_mobile,
            'battery_model' => $request->battery_model,
            'state' => auth()->user()->state,
            'serial_number' => strtoupper(Str::random(12)),
            'warranty_start' => now(),
            'warranty_end' => now()->addMonths(24),
        ]);

        return redirect()->route('dealer.dashboard')
            ->with('success', 'Warranty Registered Successfully');
    }

     public function viewwarrantiescompany()
    {
        $warranties = BatteryRegistration::with('dealer')->latest()->get();
        return view('company.warranties', compact('warranties'));
    }
}
