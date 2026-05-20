@extends('layouts.main')

@section('title', 'Data Dosen — SIAKAD')

@section('content')

{{-- Page Header --}}
<div class="page-header">
    <div style="display:flex;align-items:center;gap:8px;margin-bottom:4px;">
        <i class="bi bi-person-badge-fill" style="color:#059669;font-size:1.1rem;"></i>
        <h1 style="margin:0;font-size:1.5rem;font-weight:800;letter-spacing:-.4px;">Data Dosen</h1>
    </div>
    <p style="color:#64748b;font-size:.875rem;margin:0;">
        Jurusan Teknologi Informasi — Politeknik Negeri Padang
    </p>
</div>

{{-- Table --}}
<div class="table-modern">
    <table class="table table-hover mb-0">
        <thead>
            <tr>
                <th style="width:48px;">#</th>
                <th>Dosen</th>
                <th>NIDN</th>
                <th>Email</th>
                <th>Program Studi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dosens as $d)
            @php
                $no = ($dosens->currentPage()-1)*$dosens->perPage()+$loop->iteration;
                $initials = strtoupper(substr($d->nama_lengkap, 0, 1));
                $colors = ['#059669','#1d4ed8','#d97706','#7c3aed','#0891b2','#dc2626'];
                $bg = $colors[$loop->index % count($colors)];
            @endphp
            <tr>
                <td style="color:#94a3b8;font-size:.8rem;">{{ $no }}</td>
                <td>
                    <div style="display:flex;align-items:center;gap:10px;">
                        <div class="avatar" style="background:{{ $bg }}20;color:{{ $bg }};">{{ $initials }}</div>
                        <span style="font-weight:600;font-size:.88rem;">{{ $d->nama_lengkap }}</span>
                    </div>
                </td>
                <td><span class="mono">{{ $d->nidn }}</span></td>
                <td>
                    <a href="mailto:{{ $d->email }}"
                       style="color:#1d4ed8;font-size:.85rem;text-decoration:none;display:flex;align-items:center;gap:5px;">
                        <i class="bi bi-envelope" style="font-size:.8rem;"></i>{{ $d->email }}
                    </a>
                </td>
                <td><span class="badge-prodi">{{ $d->prodi }}</span></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

{{-- Pagination --}}
<div class="mt-3 d-flex justify-content-end">
    {{ $dosens->links() }}
</div>

@endsection
