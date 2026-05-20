@extends('layouts.main')

@section('title', 'Data Mahasiswa — SIAKAD')

@section('content')

{{-- Page Header --}}
<div class="page-header d-flex align-items-center justify-content-between flex-wrap gap-3">
    <div>
        <div style="display:flex;align-items:center;gap:8px;margin-bottom:4px;">
            <i class="bi bi-people-fill" style="color:#1d4ed8;font-size:1.1rem;"></i>
            <h1 style="margin:0;font-size:1.5rem;font-weight:800;letter-spacing:-.4px;">Data Mahasiswa</h1>
        </div>
        <p style="color:#64748b;font-size:.875rem;margin:0;">
            Jurusan Teknologi Informasi — Politeknik Negeri Padang
        </p>
    </div>
    <a href="/mahasiswa/tambah" class="btn-primary-modern">
        <i class="bi bi-plus-lg"></i> Tambah Mahasiswa
    </a>
</div>

{{-- Table --}}
<div class="table-modern">
    <table class="table table-hover mb-0">
        <thead>
            <tr>
                <th style="width:48px;">#</th>
                <th>Mahasiswa</th>
                <th>NIM</th>
                <th>Program Studi</th>
                <th>IPK</th>
                <th style="text-align:right;">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mahasiswas as $mhs)
            @php
                $no = ($mahasiswas->currentPage()-1)*$mahasiswas->perPage()+$loop->iteration;
                $initials = strtoupper(substr($mhs->nama_lengkap, 0, 1));
                $colors = ['#1d4ed8','#059669','#d97706','#7c3aed','#dc2626','#0891b2'];
                $bg = $colors[$loop->index % count($colors)];
                $ipkClass = $mhs->ipk >= 3.5 ? 'high' : ($mhs->ipk >= 2.75 ? 'mid' : 'low');
            @endphp
            <tr>
                <td style="color:#94a3b8;font-size:.8rem;">{{ $no }}</td>
                <td>
                    <div style="display:flex;align-items:center;gap:10px;">
                        <div class="avatar" style="background:{{ $bg }}20;color:{{ $bg }};">{{ $initials }}</div>
                        <span style="font-weight:600;font-size:.88rem;">{{ $mhs->nama_lengkap }}</span>
                    </div>
                </td>
                <td><span class="mono">{{ $mhs->nim }}</span></td>
                <td><span class="badge-prodi">{{ $mhs->prodi }}</span></td>
                <td><span class="badge-ipk {{ $ipkClass }}">{{ number_format($mhs->ipk, 2) }}</span></td>
                <td style="text-align:right;">
                    <a href="/mahasiswa/edit/{{ $mhs->id }}" class="btn-action btn-edit">
                        <i class="bi bi-pencil"></i> Edit
                    </a>
                    <a href="/mahasiswa/delete/{{ $mhs->id }}" class="btn-action btn-delete ms-1"
                       onclick="return confirm('Hapus data {{ $mhs->nama_lengkap }}?')">
                        <i class="bi bi-trash3"></i> Hapus
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

{{-- Pagination --}}
<div class="mt-3 d-flex justify-content-end">
    {{ $mahasiswas->links() }}
</div>

@endsection
