<?php

namespace App\Http\Controllers\Dealer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DealerDashboardController extends Controller
{
    public function index()
    {
        return view('dealer.dashboard');
    }
}
