@extends('layouts.admin')

@section('content')
<div class="container-fluid section-entry">
    <div class="row">
        <div class="col-lg-8 mx-auto">

            <div class="card shadow-sm">
                <div class="card-header">
                    <h4 class="mb-0">Create New User</h4>
                </div>

                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $err)
                                    <li>{{ $err }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('company.users.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control"
                                   value="{{ old('name') }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control"
                                   value="{{ old('email') }}" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password"
                                       class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation"
                                       class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <select name="role" class="form-select" required>
                                <option value="">-- Select Role --</option>
                                <option value="dealer" {{ old('role')=='dealer'?'selected':'' }}>
                                    Dealer
                                </option>
                                <option value="distributor" {{ old('role')=='distributor'?'selected':'' }}>
                                    Distributor
                                </option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">
                                State <small class="text-muted">(Required)</small>
                            </label>
                            <input type="text" name="state" class="form-control"
                                   value="{{ old('state') }}" placeholder="Eg: Rajasthan">
                        </div>

                        <button type="submit" class="btn btn-primary px-4">
                            Create User
                        </button>

                        <a href="{{ route('company.users.index') }}"
                           class="btn btn-secondary ms-2">
                            Back
                        </a>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
