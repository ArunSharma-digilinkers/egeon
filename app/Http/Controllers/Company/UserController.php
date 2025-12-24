<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // List all users (dealers + distributors)
    public function index()
    {
        $users = User::whereIn('role', ['dealer', 'distributor'])->latest()->get();
        return view('company.users', compact('users'));
    }

    // Show form to create new user
    public function create()
    {
        return view('company.create-user');
    }

    // Save new user
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|in:dealer,distributor',
            'state' => 'nullable|string|max:100',
        ]);

        // Distributor and Dealer must have a state
        if (in_array($request->role, ['dealer', 'distributor']) && !$request->state) {
            return back()->withErrors(['state' => 'State is required for this role'])->withInput();
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'state' => $request->state,
        ]);

        return redirect()->route('company.users.index')->with('success', 'User created successfully');
    }

      public function dashboard()
    {
        // Optional: stats
        $dealerCount = User::where('role','dealer')->count();
        $distributorCount = User::where('role','distributor')->count();

        return view('company.dashboard', compact('dealerCount','distributorCount'));
    }
}