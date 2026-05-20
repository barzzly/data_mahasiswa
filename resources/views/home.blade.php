@extends('layouts.main')

@section('title', 'Home — SIAKAD PNP')

@section('content')

{{-- Hero Section --}}
<div style="background: linear-gradient(135deg, #0f172a 0%, #1d4ed8 60%, #06b6d4 100%);
            border-radius: 20px; padding: 3rem 2.5rem; margin-bottom: 2rem; position: relative; overflow: hidden;">
    <div style="position:absolute;top:-40px;right:-40px;width:220px;height:220px;
                background:rgba(255,255,255,.05);border-radius:50%;"></div>
    <div style="position:absolute;bottom:-60px;right:80px;width:150px;height:150px;
                background:rgba(6,182,212,.1);border-radius:50%;"></div>
    <div style="position: relative; z-index: 1;">
        <span style="background:rgba(6,182,212,.2);color:#67e8f9;font-size:.75rem;
                     font-weight:700;padding:4px 12px;border-radius:20px;letter-spacing:.5px;">
            ✦ SISTEM INFORMASI AKADEMIK
        </span>
        <h1 style="color:#fff;font-size:2.2rem;font-weight:800;margin:1rem 0 .75rem;
                   letter-spacing:-1px;line-height:1.2;">
            Selamat Datang di<br><span style="color:#67e8f9;">SIAKAD PNP</span>
        </h1>
        <p style="color:#94a3b8;max-width:540px;line-height:1.7;margin-bottom:1.75rem;font-size:.95rem;">
            Platform pengelolaan data akademik terpadu untuk Mahasiswa, Dosen, dan Program Studi
            Politeknik Negeri Padang — efisien, terstruktur, dan mudah digunakan.
        </p>
        <div style="display:flex;gap:12px;flex-wrap:wrap;">
            <a href="/mahasiswa" class="btn-primary-modern">
                <i class="bi bi-people-fill"></i> Data Mahasiswa
            </a>
            <a href="/dosen" style="background:rgba(255,255,255,.1);color:#fff;border:1px solid rgba(255,255,255,.2);
                                    border-radius:9px;padding:8px 18px;font-size:.85rem;font-weight:600;
                                    display:inline-flex;align-items:center;gap:6px;text-decoration:none;transition:.2s;">
                <i class="bi bi-person-badge-fill"></i> Data Dosen
            </a>
        </div>
    </div>
</div>

{{-- Stats Row --}}
<div class="row g-3 mb-4">
    @php
        $stats = [
            ['icon'=>'bi-people-fill',    'color'=>'#1d4ed8', 'bg'=>'#eff6ff', 'label'=>'Total Mahasiswa', 'value'=>'Kelola Data', 'link'=>'/mahasiswa'],
            ['icon'=>'bi-person-badge-fill','color'=>'#059669','bg'=>'#f0fdf4','label'=>'Total Dosen',     'value'=>'Kelola Data', 'link'=>'/dosen'],
            ['icon'=>'bi-diagram-3-fill', 'color'=>'#d97706', 'bg'=>'#fffbeb','label'=>'Program Studi',   'value'=>'Kelola Data', 'link'=>'/prodi'],
            ['icon'=>'bi-shield-check-fill','color'=>'#7c3aed','bg'=>'#f5f3ff','label'=>'Status Sistem',  'value'=>'Aktif',       'link'=>'#'],
        ];
    @endphp

    @foreach($stats as $s)
    <div class="col-6 col-md-3">
        <a href="{{ $s['link'] }}" style="text-decoration:none;">
            <div class="card-modern" style="display:flex;align-items:center;gap:14px;">
                <div style="width:44px;height:44px;background:{{ $s['bg'] }};border-radius:11px;
                            display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                    <i class="{{ $s['icon'] }}" style="color:{{ $s['color'] }};font-size:1.3rem;"></i>
                </div>
                <div>
                    <div style="font-size:.72rem;color:#64748b;font-weight:600;text-transform:uppercase;letter-spacing:.4px;">
                        {{ $s['label'] }}
                    </div>
                    <div style="font-size:.95rem;font-weight:700;color:#0f172a;">{{ $s['value'] }}</div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>

{{-- Feature Cards --}}
<div class="row g-3">
    <div class="col-md-4">
        <div class="card-modern h-100">
            <div style="width:40px;height:40px;background:#eff6ff;border-radius:10px;
                        display:flex;align-items:center;justify-content:center;margin-bottom:1rem;">
                <i class="bi bi-people-fill" style="color:#1d4ed8;font-size:1.1rem;"></i>
            </div>
            <h5 style="font-weight:700;font-size:1rem;margin-bottom:.5rem;">Manajemen Mahasiswa</h5>
            <p style="color:#64748b;font-size:.85rem;line-height:1.6;margin-bottom:1.2rem;">
                Kelola data mahasiswa secara lengkap — NIM, nama, prodi, dan IPK — dengan fitur tambah, edit, dan hapus data.
            </p>
            <a href="/mahasiswa" class="btn-primary-modern" style="font-size:.8rem;padding:7px 14px;">
                Buka <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card-modern h-100">
            <div style="width:40px;height:40px;background:#f0fdf4;border-radius:10px;
                        display:flex;align-items:center;justify-content:center;margin-bottom:1rem;">
                <i class="bi bi-person-badge-fill" style="color:#059669;font-size:1.1rem;"></i>
            </div>
            <h5 style="font-weight:700;font-size:1rem;margin-bottom:.5rem;">Manajemen Dosen</h5>
            <p style="color:#64748b;font-size:.85rem;line-height:1.6;margin-bottom:1.2rem;">
                Pantau dan kelola data dosen pengajar beserta informasi NIDN, email, dan program studi yang diampu.
            </p>
            <a href="/dosen" style="background:#f0fdf4;color:#059669;border:1px solid #bbf7d0;border-radius:9px;
                                    padding:7px 14px;font-size:.8rem;font-weight:600;display:inline-flex;
                                    align-items:center;gap:6px;text-decoration:none;">
                Buka <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card-modern h-100">
            <div style="width:40px;height:40px;background:#fffbeb;border-radius:10px;
                        display:flex;align-items:center;justify-content:center;margin-bottom:1rem;">
                <i class="bi bi-diagram-3-fill" style="color:#d97706;font-size:1.1rem;"></i>
            </div>
            <h5 style="font-weight:700;font-size:1rem;margin-bottom:.5rem;">Program Studi</h5>
            <p style="color:#64748b;font-size:.85rem;line-height:1.6;margin-bottom:1.2rem;">
                Lihat daftar program studi beserta kode prodi dan nama Kepala Program Studi yang bertanggung jawab.
            </p>
            <a href="/prodi" style="background:#fffbeb;color:#d97706;border:1px solid #fde68a;border-radius:9px;
                                    padding:7px 14px;font-size:.8rem;font-weight:600;display:inline-flex;
                                    align-items:center;gap:6px;text-decoration:none;">
                Buka <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

@endsection
