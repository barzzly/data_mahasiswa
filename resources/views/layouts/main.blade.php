<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') — SIAKAD PNP</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        :root {
            --primary:     #1d4ed8;
            --primary-dark:#1e3a8a;
            --accent:      #06b6d4;
            --surface:     #f8fafc;
            --surface-2:   #f1f5f9;
            --border:      #e2e8f0;
            --text-main:   #0f172a;
            --text-muted:  #64748b;
            --success:     #059669;
            --warning:     #d97706;
            --danger:      #dc2626;
            --sidebar-w:   240px;
        }

        * { box-sizing: border-box; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--surface);
            color: var(--text-main);
            min-height: 100vh;
            margin: 0;
        }

        /* ── NAVBAR ── */
        .siakad-navbar {
            background: #0f172a;
            border-bottom: 1px solid #1e293b;
            padding: 0 1.5rem;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .siakad-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }
        .brand-icon {
            width: 36px; height: 36px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 9px;
            display: flex; align-items: center; justify-content: center;
            color: #fff; font-size: 17px;
        }
        .brand-text {
            font-weight: 800;
            font-size: 1.05rem;
            color: #fff;
            letter-spacing: -0.3px;
        }
        .brand-sub {
            font-size: 0.65rem;
            color: #64748b;
            font-weight: 400;
            display: block;
            line-height: 1;
        }
        .siakad-nav-links {
            display: flex; align-items: center; gap: 4px;
            list-style: none; margin: 0; padding: 0;
        }
        .siakad-nav-links .nav-link {
            color: #94a3b8 !important;
            font-size: 0.85rem;
            font-weight: 500;
            padding: 6px 14px;
            border-radius: 7px;
            display: flex; align-items: center; gap: 6px;
            transition: all .18s;
            text-decoration: none;
        }
        .siakad-nav-links .nav-link:hover,
        .siakad-nav-links .nav-link.active {
            background: #1e293b;
            color: #fff !important;
        }
        .siakad-nav-links .nav-link i { font-size: 15px; }

        .navbar-badge {
            font-size: 0.6rem;
            background: var(--accent);
            color: #fff;
            padding: 1px 5px;
            border-radius: 4px;
            font-weight: 700;
        }

        /* ── MAIN WRAPPER ── */
        .page-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1.5rem 4rem;
        }

        /* ── PAGE HEADER ── */
        .page-header {
            margin-bottom: 2rem;
        }
        .page-header h1 {
            font-size: 1.65rem;
            font-weight: 800;
            color: var(--text-main);
            margin: 0 0 4px;
            letter-spacing: -0.5px;
        }
        .page-header p {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin: 0;
        }

        /* ── CARDS ── */
        .card-modern {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 1.5rem;
            transition: box-shadow .2s;
        }
        .card-modern:hover {
            box-shadow: 0 4px 24px rgba(0,0,0,.07);
        }

        /* ── TABLES ── */
        .table-modern {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid var(--border);
        }
        .table-modern table {
            margin: 0;
            font-size: 0.88rem;
        }
        .table-modern thead th {
            background: #f8fafc;
            color: var(--text-muted);
            font-weight: 600;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: .5px;
            border-bottom: 1px solid var(--border);
            padding: 12px 16px;
        }
        .table-modern tbody td {
            padding: 12px 16px;
            border-bottom: 1px solid #f1f5f9;
            vertical-align: middle;
            color: var(--text-main);
        }
        .table-modern tbody tr:last-child td { border-bottom: none; }
        .table-modern tbody tr:hover { background: #f8fafc; }

        /* ── BADGES ── */
        .badge-prodi {
            background: #eff6ff;
            color: var(--primary);
            font-size: 0.75rem;
            font-weight: 600;
            padding: 3px 10px;
            border-radius: 20px;
            border: 1px solid #bfdbfe;
        }
        .badge-ipk {
            font-family: 'DM Mono', monospace;
            font-size: 0.8rem;
            font-weight: 500;
        }
        .badge-ipk.high { color: var(--success); }
        .badge-ipk.mid  { color: var(--warning); }
        .badge-ipk.low  { color: var(--danger);  }

        /* ── BUTTONS ── */
        .btn-primary-modern {
            background: var(--primary);
            color: #fff;
            border: none;
            border-radius: 9px;
            padding: 8px 18px;
            font-size: 0.85rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            text-decoration: none;
            transition: background .18s, transform .1s;
        }
        .btn-primary-modern:hover {
            background: var(--primary-dark);
            color: #fff;
            transform: translateY(-1px);
        }
        .btn-action {
            border-radius: 7px;
            font-size: 0.78rem;
            font-weight: 600;
            padding: 5px 12px;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            text-decoration: none;
            transition: all .15s;
        }
        .btn-edit {
            background: #fefce8; color: #a16207;
            border: 1px solid #fde68a;
        }
        .btn-edit:hover { background: #fde68a; color: #a16207; }
        .btn-delete {
            background: #fef2f2; color: var(--danger);
            border: 1px solid #fecaca;
        }
        .btn-delete:hover { background: #fecaca; color: var(--danger); }

        /* ── NIM MONOSPACE ── */
        .mono { font-family: 'DM Mono', monospace; font-size: 0.82rem; color: var(--text-muted); }

        /* ── AVATAR ── */
        .avatar {
            width: 32px; height: 32px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.7rem;
            flex-shrink: 0;
        }

        /* ── PAGINATION ── */
        .pagination .page-link {
            border-radius: 7px !important;
            margin: 0 2px;
            font-size: 0.82rem;
            color: var(--primary);
            border-color: var(--border);
        }
        .pagination .page-item.active .page-link {
            background: var(--primary);
            border-color: var(--primary);
        }

        /* ── FOOTER ── */
        .siakad-footer {
            background: #0f172a;
            color: #475569;
            text-align: center;
            font-size: 0.78rem;
            padding: 18px;
        }
        .siakad-footer span { color: #64748b; }
    </style>
</head>
<body>

    @include('layouts.header')

    <div class="page-wrapper">
        @yield('content')
    </div>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
