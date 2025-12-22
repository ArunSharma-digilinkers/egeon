<aside class="admin-sidebar">
    <div class="sidebar-header">
        <h2>Admin Panel</h2>
    </div>

    <nav class="sidebar-nav">
        <a href="{{ route('dashboard') }}" class="nav-link active">
            Dashboard
        </a>

        <a href="{{ route('product.index') }}" class="nav-link">
            Products
        </a>

         <a href="{{ route('blog.index') }}" class="nav-link">
            Blog
        </a>

        <a href="#" class="nav-link">
            Battery Calculator
        </a>
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
