@extends('layouts.main')

@section('title', 'Program Studi — SIAKAD')

@section('content')

{{-- Page Header --}}
<div class="page-header">
    <div style="display:flex;align-items:center;gap:8px;margin-bottom:4px;">
        <i class="bi bi-diagram-3-fill" style="color:#d97706;font-size:1.1rem;"></i>
        <h1 style="margin:0;font-size:1.5rem;font-weight:800;letter-spacing:-.4px;">Program Studi</h1>
    </div>
    <p style="color:#64748b;font-size:.875rem;margin:0;">
        Daftar program studi aktif di Politeknik Negeri Padang
    </p>
</div>

{{-- Table --}}
<div class="table-modern">
    <table class="table table-hover mb-0">
        <thead>
            <tr>
                <th style="width:48px;">#</th>
                <th>Program Studi</th>
                <th>Kode Prodi</th>
                <th>Kepala Program Studi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($prodis as $p)
            @php
                $no = ($prodis->currentPage()-1)*$prodis->perPage()+$loop->iteration;
                $prodiColors = [
                    '#d97706', '#1d4ed8', '#059669', '#7c3aed', '#dc2626', '#0891b2'
                ];
                $c = $prodiColors[$loop->index % count($prodiColors)];
            @endphp
            <tr>
                <td style="color:#94a3b8;font-size:.8rem;">{{ $no }}</td>
                <td>
                    <div style="display:flex;align-items:center;gap:10px;">
                        <div style="width:36px;height:36px;background:{{ $c }}20;border-radius:9px;
                                    display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <i class="bi bi-book-fill" style="color:{{ $c }};font-size:.9rem;"></i>
                        </div>
                        <span style="font-weight:600;font-size:.88rem;">{{ $p->nama_prodi }}</span>
                    </div>
                </td>
                <td>
                    <span style="font-family:'DM Mono',monospace;font-size:.82rem;
                                 background:#f8fafc;border:1px solid #e2e8f0;
                                 padding:3px 9px;border-radius:6px;color:#475569;">
                        {{ $p->kode_prodi }}
                    </span>
                </td>
                <td>
                    <div style="display:flex;align-items:center;gap:7px;font-size:.87rem;">
                        <i class="bi bi-person-fill" style="color:#94a3b8;"></i>
                        {{ $p->kaprodi }}
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

{{-- Pagination --}}
<div class="mt-3 d-flex justify-content-end">
    {{ $prodis->links() }}
</div>

@endsection
