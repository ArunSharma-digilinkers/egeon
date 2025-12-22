@include('inc.admin-header')

@include('inc.admin-navbar')

{{-- Main Content --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-4 admin-sidebar">
            @include('inc.admin-sidenav')
        </div>
        <div class="col-lg-9 col-md-8 admin-content">
            @yield('content')
        </div>
    </div>
</div>

@include('inc.admin-footer')
