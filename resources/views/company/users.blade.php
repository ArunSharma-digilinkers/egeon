@extends('layouts.admin')

@section('page-title', 'All Users')

@section('content')
<div class="container-fluid mt-3">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">All Users</h4>

        <a href="{{ route('company.users.create') }}"
           class="btn btn-primary">
            <i class="fa fa-plus"></i> Create New User
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0">

            <table class="table table-striped table-hover mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>State</th>
                    </tr>
                </thead>

                <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>

                        <td>
                            <span class="badge 
                                @if($user->role == 'dealer') bg-success
                                @elseif($user->role == 'distributor') bg-warning
                                @else bg-secondary
                                @endif">
                                {{ ucfirst($user->role) }}
                            </span>
                        </td>

                        <td>{{ $user->state ?? '-' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4">
                            No users found.
                        </td>
                    </tr>
                @endforelse
                </tbody>

            </table>

        </div>
    </div>

</div>
@endsection
