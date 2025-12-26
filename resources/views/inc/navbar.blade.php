<nav class="navbar navbar-expand-lg navbar-light bg-light dd-nav">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="img-fluid logo-img">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <!-- Public Links -->
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products') }}">Our Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                </li>

                @guest
                <li class="nav-item">
                    <a class="nav-link login-btn" href="{{ route('login') }}">
                        Login
                    </a>
                </li>
                @endguest


                @auth
                <!-- Show when logged in -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">

                        <!-- Role Based Dashboard -->
                        @if(auth()->user()->role === 'company')
                        <li>
                            <a class="dropdown-item" href="{{ route('company.dashboard') }}">
                                Company Dashboard
                            </a>
                        </li>
                        @elseif(auth()->user()->role === 'distributor')
                        <li>
                            <a class="dropdown-item" href="{{ route('distributor.dashboard') }}">
                                Distributor Dashboard
                            </a>
                        </li>
                        @elseif(auth()->user()->role === 'dealer')
                        <li>
                            <a class="dropdown-item" href="{{ route('dealer.dashboard') }}">
                                Dealer Dashboard
                            </a>
                        </li>
                        @endif

                        <li>
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                Profile
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>