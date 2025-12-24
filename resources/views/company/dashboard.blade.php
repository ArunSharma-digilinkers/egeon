@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Company Dashboard</h1>
    <p>Welcome, {{ auth()->user()->name }}!</p>

    <ul>
        <li><a href="{{ route('company.users.index') }}">Manage Dealers & Distributors</a></li>

        <li><a href="#">View All Warranties</a></li>
    </ul>
</div>
@endsection
