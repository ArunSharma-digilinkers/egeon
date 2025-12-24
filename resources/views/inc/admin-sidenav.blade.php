<aside class="admin-sidebar">
    <div class="sidebar-header">
        <h2>
            @if(auth()->user()->role === 'company')
                Super Admin Panel
            @elseif(auth()->user()->role === 'distributor')
                Distributor Panel
            @elseif(auth()->user()->role === 'dealer')
                Dealer Panel
            @endif
        </h2>
    </div>

    <nav class="sidebar-nav">

        {{-- ================= COMPANY (SUPER ADMIN) ================= --}}
        @if(auth()->user()->role === 'company')

            <a href="{{ route('company.dashboard') }}" class="nav-link">
                Dashboard
            </a>

            <a href="{{ route('company.users.create') }}" class="nav-link">
                Create Users
            </a>

            <a href="{{ route('company.users.index') }}" class="nav-link">
                All Users
            </a>

             <a href="{{ route('company.warranties') }}" class="nav-link">
                All Warranties
            </a>


            <a href="{{ route('blog.index') }}" class="nav-link">
                Blog
            </a>

        {{-- ================= DISTRIBUTOR ================= --}}
        @elseif(auth()->user()->role === 'distributor')

            <a href="{{ route('distributor.dashboard') }}" class="nav-link">
                Dashboard
            </a>

            <!-- <a href="{{ route('distributor.warranties') }}" class="nav-link">
                State Warranties
            </a> -->

        {{-- ================= DEALER ================= --}}
        @elseif(auth()->user()->role === 'dealer')

            <a href="{{ route('dealer.dashboard') }}" class="nav-link">
                Dashboard
            </a>

            <a href="{{ route('dealer.warranty.create') }}" class="nav-link">
                Register Warranty
            </a>


        @endif

    </nav>

    <div class="sidebar-footer">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-btn">
                Logout
            </button>
        </form>
    </div>
</aside>
