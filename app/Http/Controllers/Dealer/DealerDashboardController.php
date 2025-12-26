<?php

namespace App\Http\Controllers\Dealer;

use App\Http\Controllers\Controller;
use App\Models\BatteryRegistration;
use App\Models\User;
use Illuminate\Http\Request;

class DealerDashboardController extends Controller
{
   public function index()
    {
        $dealerId = auth()->id();

        $stats = [
            'total' => BatteryRegistration::where('dealer_id', $dealerId)->count(),
            'active' => BatteryRegistration::where('dealer_id', $dealerId)
                            ->whereDate('warranty_end', '>=', now())
                            ->count(),
            'expired' => BatteryRegistration::where('dealer_id', $dealerId)
                            ->whereDate('warranty_end', '<', now())
                            ->count(),
        ];

        return view('dealer.dashboard', compact('stats'));
    }


      public function distributordash()
    {
        $state = auth()->user()->state;

        $stats = [
            'warranties' => BatteryRegistration::where('state', $state)->count(),
            'dealers'    => User::where('role', 'dealer')->where('state', $state)->count(),
            'active'     => BatteryRegistration::where('state', $state)
                              ->whereDate('warranty_end', '>=', now())
                              ->count(),
        ];

        return view('distributor.dashboard', compact('stats'));
    }
}