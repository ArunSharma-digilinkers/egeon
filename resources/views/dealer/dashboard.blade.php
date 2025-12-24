@extends('layouts.admin')

@section('content')
<h3>Dealer Dashboard</h3>

<p>Welcome, {{ auth()->user()->name }}</p>

<a href="{{ route('dealer.warranty.create') }}" class="btn btn-primary">
    Register New Warranty
</a>
@endsection
