@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Create Company User</h1>

    @if(session('success'))
        <div style="color:green;">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('company.store-company') }}" method="POST">
        @csrf
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>

        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>

        <div>
            <label>Confirm Password:</label>
            <input type="password" name="password_confirmation" required>
        </div>

        <div>
            <button type="submit">Create Company User</button>
        </div>
    </form>
</div>
@endsection
