@php
    $currentRoute = request()->path();
@endphp

<nav class="siakad-navbar">
    <a href="/" class="siakad-brand">
        <div class="brand-icon"><i class="bi bi-mortarboard-fill"></i></div>
        <div>
            <span class="brand-text">SIAKAD</span>
            <span class="brand-sub">Politeknik Negeri Padang</span>
        </div>
    </a>

    <ul class="siakad-nav-links">
        <li>
            <a href="/" class="nav-link {{ $currentRoute == '/' ? 'active' : '' }}">
                <i class="bi bi-house-door"></i> Home
            </a>
        </li>
        <li>
            <a href="/mahasiswa" class="nav-link {{ str_starts_with($currentRoute, 'mahasiswa') ? 'active' : '' }}">
                <i class="bi bi-people"></i> Mahasiswa
            </a>
        </li>
        <li>
            <a href="/dosen" class="nav-link {{ str_starts_with($currentRoute, 'dosen') ? 'active' : '' }}">
                <i class="bi bi-person-badge"></i> Dosen
            </a>
        </li>
        <li>
            <a href="/prodi" class="nav-link {{ str_starts_with($currentRoute, 'prodi') ? 'active' : '' }}">
                <i class="bi bi-diagram-3"></i> Prodi
            </a>
        </li>
    </ul>
</nav>
