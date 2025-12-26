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


       public function viewwarranty(Request $request)
    {
        $query = BatteryRegistration::where('dealer_id', auth()->id());

        // 🔍 Search by serial number
        if ($request->filled('serial_number')) {
            $query->where('serial_number', 'like', '%' . $request->serial_number . '%');
        }

        $warranties = $query->latest()->get();

        return view('dealer.view-warranty', compact('warranties'));
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
            'serial_number' => $serial_number,
            'state' => auth()->user()->state,
            'warranty_start' => now(),
            'warranty_end' => now()->addMonths($request->warranty_months),
        ]);

        return redirect()->route('dealer.dashboard')
            ->with('success', 'Warranty Registered Successfully');
    }

     public function viewwarrantiescompany()
    {
        $warranties = BatteryRegistration::with('dealer')->latest()->get();
        return view('company.warranties', compact('warranties'));
    }

    public function check(Request $request)
{
        $query = BatteryRegistration::with('dealer')
        ->where('state', auth()->user()->state);

    // Search by serial number
    if ($request->has('serial_number') && $request->serial_number != '') {
        $query->where('serial_number', 'like', '%'.$request->serial_number.'%');
    }

    $warranties = $query->latest()->get();

    return view('distributor.check-warranty', compact('warranties'));
}


}
