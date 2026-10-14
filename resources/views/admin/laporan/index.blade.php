<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laporan - NAYS TAILOR</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #fff8f5;
            color: #4f3740;
        }

        /* SIDEBAR */
        .sidebar {
            width: 255px;
            height: 100vh;
            min-height: 100vh;

            background: linear-gradient(
                180deg,
                #6f3d55 0%,
                #814761 50%,
                #9c5c76 100%
            );

            padding: 28px 18px;

            display: flex;
            flex-direction: column;

            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;

            overflow-y: auto;
            overflow-x: hidden;

            box-shadow: 5px 0 25px rgba(111,61,85,.12);
        }

        .sidebar::-webkit-scrollbar {
            width: 6px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: transparent;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(255,255,255,.35);
            border-radius: 10px;
        }

        .brand {
            text-align: center;
            margin-bottom: 32px;
        }

        .brand h1 {
            font-family: Georgia, serif;
            font-size: 29px;
            letter-spacing: 2px;
            color: white;
        }

        .brand p {
            font-size: 10px;
            letter-spacing: 5px;
            margin-top: 3px;
            color: white;
        }

        .brand-line {
            width: 45px;
            height: 2px;
            background: #f8dce5;
            margin: 15px auto 0;
        }

        .menu-label {
            font-size: 10px;
            font-weight: bold;
            letter-spacing: 1.5px;
            color: #e8cbd6;
            margin: 4px 10px 16px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 13px;

            text-decoration: none;

            color: #fff5f8;

            font-size: 14px;
            font-weight: 600;

            padding: 15px 16px;

            margin-bottom: 7px;

            border-radius: 13px;

            transition: .2s;
        }

        .menu a:hover,
        .menu a.active {
            background: #f8e1e7;
            color: #713b50;
        }

        .menu-icon {
            width: 23px;
            text-align: center;
            font-size: 18px;
        }

        .sidebar-bottom {
            margin-top: auto;
            padding-top: 25px;
            padding-bottom: 10px;

            border-top: 1px solid rgba(255,255,255,.15);

            flex-shrink: 0;
        }

        .logout {
            width: 100%;
            background: white;
            color: #713b50;
            border: none;
            padding: 14px 16px;
            border-radius: 12px;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
        }

        .logout:hover {
            background: #f8e1e7;
        }

        /* MAIN */
        .main {
            margin-left: 255px;
            padding: 30px 40px 50px;
            min-height: 100vh;
        }

        /* TOP */
        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .topbar h2 {
            font-family: Georgia, serif;
            font-size: 26px;
            color: #713b50;
        }

        .topbar p {
            color: #987581;
            font-size: 13px;
            margin-top: 5px;
        }

        .admin-badge {
            background: white;
            border: 1px solid #f2dce3;
            padding: 11px 17px;
            border-radius: 30px;
            font-size: 12px;
            color: #713b50;
        }

        /* HEADER */
        .report-header {
            background: linear-gradient(
                110deg,
                #713b50,
                #a45d7b
            );

            color: white;

            border-radius: 20px;

            padding: 28px 32px;

            margin-bottom: 20px;
        }

        .report-header h1 {
            font-family: Georgia, serif;
            font-size: 28px;
            margin-bottom: 7px;
        }

        .report-header p {
            font-size: 13px;
            opacity: .9;
        }

        /* BUTTON */
        .action-buttons {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
        }

        .btn-back {
            background: #f1dce3;
            color: #713b50;
            border: 1px solid #e6c7d2;
        }

        .btn-back:hover {
            background: #e8cbd5;
        }

        .btn-pdf {
            background: #965674;
            color: white;
        }

        .btn-pdf:hover {
            background: #713b50;
        }

        /* STATISTIK */
        .stats {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
            margin-bottom: 25px;
        }

        .stat-card {
            background: white;
            border: 1px solid #f2dce3;
            border-radius: 18px;
            padding: 22px;
            min-height: 130px;
        }

        .stat-icon {
            font-size: 23px;
            margin-bottom: 12px;
        }

        .stat-title {
            font-size: 12px;
            color: #987581;
            margin-bottom: 5px;
        }

        .stat-number {
            font-family: Georgia, serif;
            font-size: 27px;
            font-weight: bold;
            color: #713b50;
        }

        /* DATA */
        .content-card {
            background: white;
            border: 1px solid #f2dce3;
            border-radius: 20px;
            padding: 27px;
        }

        .content-title {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .content-title h2 {
            font-family: Georgia, serif;
            color: #713b50;
            font-size: 22px;
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 750px;
        }

        thead th {
            background: #f8e1e7;
            color: #713b50;
            padding: 14px 13px;
            text-align: left;
            font-size: 11px;
            font-weight: bold;
        }

        thead th:first-child {
            border-radius: 10px 0 0 10px;
        }

        thead th:last-child {
            border-radius: 0 10px 10px 0;
        }

        tbody td {
            padding: 15px 13px;
            border-bottom: 1px solid #f2e1e6;
            font-size: 12px;
            color: #5c424b;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        tbody tr:hover {
            background: #fffafb;
        }

        /* STATUS */
        .status {
            display: inline-block;
            padding: 7px 11px;
            border-radius: 20px;
            background: #f8e1e7;
            color: #8b4660;
            font-size: 10px;
            font-weight: bold;
        }

        .status-menunggu {
            background: #fff0d6;
            color: #926821;
        }

        .status-diproses {
            background: #e1f0f6;
            color: #44758a;
        }

        .status-selesai {
            background: #e1f0e7;
            color: #39744d;
        }

        .status-diambil {
            background: #eee2f2;
            color: #70477d;
        }

        .total {
            font-weight: bold;
            color: #713b50;
            white-space: nowrap;
        }

        .empty {
            text-align: center;
            padding: 30px;
            color: #a17d89;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {

            .main {
                padding: 25px;
            }

            .stats {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media(max-width:700px) {

            .sidebar {
                width: 75px;
                padding: 20px 9px;
            }

            .brand h1 {
                font-size: 15px;
            }

            .brand p,
            .brand-line,
            .menu-label,
            .menu a span:not(.menu-icon) {
                display: none;
            }

            .menu a {
                justify-content: center;
                padding: 15px 5px;
            }

            .main {
                margin-left: 75px;
                padding: 20px 13px;
            }

            .topbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }

            .action-buttons {
                justify-content: flex-start;
                flex-wrap: wrap;
            }

            .stats {
                grid-template-columns: 1fr 1fr;
                gap: 10px;
            }

            .stat-card {
                padding: 18px;
            }

            .content-card {
                padding: 18px;
            }
        }

    </style>
</head>

<body>

<!-- SIDEBAR -->

<aside class="sidebar">

    <div class="brand">

        <h1>NAYS</h1>

        <p>TAILOR</p>

        <div class="brand-line"></div>

    </div>


    <div class="menu-label">
        MENU UTAMA
    </div>


    <nav class="menu">

        <a href="{{ route('dashboard') }}">
            <span class="menu-icon">🏠</span>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('pelanggan.index') }}">
            <span class="menu-icon">👥</span>
            <span>Pelanggan</span>
        </a>

        <a href="{{ route('layanan.index') }}">
            <span class="menu-icon">✂️</span>
            <span>Layanan</span>
        </a>

        <a href="{{ route('pesanan.index') }}">
            <span class="menu-icon">🧵</span>
            <span>Pesanan</span>
        </a>

        <a href="{{ route('ukuran.index') }}">
            <span class="menu-icon">📏</span>
            <span>Ukuran</span>
        </a>

        <a href="{{ route('pembayaran.index') }}">
            <span class="menu-icon">💳</span>
            <span>Pembayaran</span>
        </a>

        <a href="{{ route('laporan.index') }}" class="active">
            <span class="menu-icon">📊</span>
            <span>Laporan</span>
        </a>

    </nav>


    <div class="sidebar-bottom">

        <form action="{{ route('logout') }}" method="POST">

            @csrf

            <button type="submit" class="logout">
                🚪 Keluar
            </button>

        </form>

    </div>

</aside>


<!-- MAIN -->

<main class="main">


    <!-- TOPBAR -->

    <div class="topbar">

        <div>

            <h2>NAYS TAILOR</h2>

            <p>
                Sistem Informasi Jasa Jahit Celana & Dress Anak
            </p>

        </div>


        <div class="admin-badge">

            👤
            {{ auth()->user()->name ?? 'Administrator' }}

        </div>

    </div>


    <!-- HEADER LAPORAN -->

    <div class="report-header">

        <h1>
            📊 Laporan
        </h1>

        <p>
            Ringkasan data pelanggan, layanan, pesanan,
            dan pembayaran NAYS TAILOR.
        </p>

    </div>


    <!-- BUTTON -->

    <div class="action-buttons">

        <a
            href="{{ route('dashboard') }}"
            class="btn btn-back"
        >
            ← Kembali
        </a>


        <a
            href="{{ route('laporan.pdf') }}"
            class="btn btn-pdf"
        >
            📄 Export PDF
        </a>

    </div>


    <!-- STATISTIK -->

    <div class="stats">


        <div class="stat-card">

            <div class="stat-icon">
                👥
            </div>

            <div class="stat-title">
                Total Pelanggan
            </div>

            <div class="stat-number">
                {{ $totalPelanggan }}
            </div>

        </div>


        <div class="stat-card">

            <div class="stat-icon">
                ✂️
            </div>

            <div class="stat-title">
                Total Layanan
            </div>

            <div class="stat-number">
                {{ $totalLayanan }}
            </div>

        </div>


        <div class="stat-card">

            <div class="stat-icon">
                🧵
            </div>

            <div class="stat-title">
                Total Pesanan
            </div>

            <div class="stat-number">
                {{ $totalPesanan }}
            </div>

        </div>


        <div class="stat-card">

            <div class="stat-icon">
                💳
            </div>

            <div class="stat-title">
                Total Pembayaran
            </div>

            <div class="stat-number">

                Rp {{ number_format(
                    $totalPembayaran,
                    0,
                    ',',
                    '.'
                ) }}

            </div>

        </div>

    </div>


    <!-- DATA PESANAN -->

    <div class="content-card">

        <div class="content-title">

            <span style="font-size:23px;">
                📋
            </span>

            <h2>
                Data Pesanan
            </h2>

        </div>


        <div class="table-wrapper">

            <table>

                <thead>

                    <tr>

                        <th>No</th>

                        <th>Pelanggan</th>

                        <th>Layanan</th>

                        <th>Tanggal</th>

                        <th>Status</th>

                        <th>Total</th>

                    </tr>

                </thead>


                <tbody>

                    @forelse($pesanans as $index => $pesanan)

                        <tr>

                            <td>
                                {{ $index + 1 }}
                            </td>


                            <td>
                                {{ $pesanan->pelanggan->nama ?? '-' }}
                            </td>


                            <td>
                                {{ $pesanan->layanan->nama_layanan ?? '-' }}
                            </td>


                            <td>

                                @if($pesanan->tanggal_masuk)

                                    {{ \Carbon\Carbon::parse(
                                        $pesanan->tanggal_masuk
                                    )->format('d/m/Y') }}

                                @else

                                    -

                                @endif

                            </td>


                            <td>

                                @php

                                    $statusClass = '';

                                    if ($pesanan->status === 'Menunggu') {
                                        $statusClass = 'status-menunggu';
                                    }

                                    elseif ($pesanan->status === 'Diproses') {
                                        $statusClass = 'status-diproses';
                                    }

                                    elseif ($pesanan->status === 'Selesai') {
                                        $statusClass = 'status-selesai';
                                    }

                                    elseif ($pesanan->status === 'Diambil') {
                                        $statusClass = 'status-diambil';
                                    }

                                @endphp


                                <span class="status {{ $statusClass }}">

                                    {{ $pesanan->status }}

                                </span>

                            </td>


                            <td class="total">

                                Rp {{ number_format(
                                    (float) $pesanan->harga,
                                    0,
                                    ',',
                                    '.'
                                ) }}

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="6"
                                class="empty"
                            >

                                Belum ada data pesanan.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>


</main>

</body>
</html>