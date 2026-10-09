<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">ParkTrack</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('reservasi.index') ? 'active' : '' }}" href="{{ route('reservasi.index') }}">Reservasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('denda.index') ? 'active' : '' }}" href="{{ route('denda.index') }}">Denda & Pelanggaran</a>
                </li>
            </ul>
        </div>
    </div>
</nav>