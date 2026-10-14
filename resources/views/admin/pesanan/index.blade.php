<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Data Pesanan - Nays Tailor</title>


    <style>

        * {
            box-sizing: border-box;
        }


        body {
            margin: 0;

            font-family: Arial, sans-serif;

            background: #FFF4F7;

            color: #4F3740;
        }


        /* =========================
           SIDEBAR
        ========================= */

        .sidebar {

            width: 255px;

            height: 100vh;

            min-height: 100vh;

            background:
                linear-gradient(
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

            box-shadow:
                5px 0 25px
                rgba(111,61,85,.12);

            scrollbar-width: thin;

            scrollbar-color:
                rgba(255,255,255,.35)
                transparent;
        }


        .sidebar::-webkit-scrollbar {
            width: 6px;
        }


        .sidebar::-webkit-scrollbar-track {
            background: transparent;
        }


        .sidebar::-webkit-scrollbar-thumb {

            background:
                rgba(255,255,255,.35);

            border-radius: 10px;
        }


        /* LOGO */

        .logo {

            text-align: center;

            color: white;

            margin-bottom: 35px;
        }


        .logo h1 {

            margin: 0;

            font-family: Georgia, serif;

            font-size: 27px;

            letter-spacing: 2px;
        }


        .logo span {

            display: block;

            margin-top: 5px;

            font-size: 11px;

            letter-spacing: 3px;

            opacity: .85;
        }


        /* MENU */

        .menu-title {

            color:
                rgba(255,255,255,.65);

            font-size: 11px;

            font-weight: bold;

            text-transform: uppercase;

            letter-spacing: 1.5px;

            margin:
                0 12px 12px;
        }


        .menu {

            display: flex;

            flex-direction: column;

            gap: 7px;
        }


        .menu a {

            display: flex;

            align-items: center;

            gap: 12px;

            padding:
                12px 14px;

            border-radius: 12px;

            color: white;

            text-decoration: none;

            font-size: 14px;

            transition: .2s;
        }


        .menu a:hover {

            background:
                rgba(255,255,255,.13);

            transform:
                translateX(2px);
        }


        .menu a.active {

            background:
                rgba(255,255,255,.20);

            box-shadow:
                inset 3px 0 0 white;
        }


        .menu-icon {

            width: 24px;

            text-align: center;

            font-size: 17px;
        }


        /* BOTTOM */

        .sidebar-bottom {

            margin-top: 25px;

            padding-top: 25px;

            padding-bottom: 10px;

            border-top:
                1px solid
                rgba(255,255,255,.15);

            flex-shrink: 0;
        }


        .admin-box {

            background:
                rgba(255,255,255,.10);

            padding: 13px;

            border-radius: 14px;

            color: white;

            margin-bottom: 12px;
        }


        .admin-name {

            font-size: 13px;

            font-weight: bold;

            margin-bottom: 4px;
        }


        .admin-role {

            font-size: 11px;

            opacity: .75;
        }


        .logout {

            width: 100%;

            border: none;

            background:
                rgba(255,255,255,.08);

            color: white;

            padding: 11px;

            border-radius: 11px;

            cursor: pointer;

            font-size: 13px;

            font-weight: bold;
        }


        .logout:hover {

            background:
                rgba(255,255,255,.16);
        }


        /* =========================
           MAIN CONTENT
        ========================= */

        .main {

            margin-left: 255px;

            min-height: 100vh;

            padding: 35px;
        }


        .topbar {

            display: flex;

            justify-content:
                space-between;

            align-items: center;

            margin-bottom: 25px;
        }


        .topbar h1 {

            margin: 0;

            color: #713B50;

            font-family: Georgia, serif;

            font-size: 28px;
        }


        .topbar p {

            margin:
                6px 0 0;

            color: #8B6875;

            font-size: 14px;
        }


        .admin-label {

            background: white;

            padding:
                10px 16px;

            border-radius: 30px;

            box-shadow:
                0 5px 18px
                rgba(113,59,80,.08);

            color: #713B50;

            font-size: 13px;

            font-weight: bold;
        }


        /* =========================
           CARD
        ========================= */

        .card {

            background: white;

            border-radius: 22px;

            padding: 30px;

            box-shadow:
                0 10px 35px
                rgba(113,59,80,.10);
        }


        .header {

            display: flex;

            justify-content:
                space-between;

            align-items: center;

            gap: 20px;

            margin-bottom: 25px;
        }


        .header h2 {

            margin: 0 0 7px;

            color: #713B50;

            font-family: Georgia, serif;

            font-size: 25px;
        }


        .header p {

            margin: 0;

            color: #8B6875;
        }


        /* BUTTON */

        .btn {

            display: inline-block;

            text-decoration: none;

            border: none;

            border-radius: 12px;

            padding:
                11px 17px;

            font-size: 13px;

            font-weight: bold;

            cursor: pointer;
        }


        .btn-primary {

            background: #F28FA9;

            color: white;
        }


        .btn-primary:hover {

            background: #E97895;
        }


        .btn-edit {

            background: #E1F0F6;

            color: #542C3D;
        }


        .btn-delete {

            background: #FFE1E9;

            color: #9B3D55;
        }


        /* SUCCESS */

        .success {

            background: #E7F7ED;

            color: #287A45;

            border:
                1px solid
                #B8E4C5;

            padding:
                14px 18px;

            border-radius: 12px;

            margin-bottom: 20px;
        }


        /* TABLE */

        .table-wrapper {

            overflow-x: auto;
        }


        table {

            width: 100%;

            border-collapse: collapse;

            min-width: 1050px;
        }


        th {

            background: #713B50;

            color: white;

            padding:
                14px 12px;

            text-align: left;

            font-size: 13px;

            white-space: nowrap;
        }


        th:first-child {

            border-radius:
                10px 0 0 10px;
        }


        th:last-child {

            border-radius:
                0 10px 10px 0;
        }


        td {

            padding:
                15px 12px;

            border-bottom:
                1px solid
                #F1E1E6;

            font-size: 14px;

            vertical-align: middle;
        }


        tr:hover td {

            background: #FFFAFB;
        }


        .kode {

            color: #713B50;

            font-weight: bold;

            white-space: nowrap;
        }


        .money {

            color: #713B50;

            font-weight: bold;

            white-space: nowrap;
        }


        .dp {

            color: #7FAABD;

            font-weight: bold;

            white-space: nowrap;
        }


        .sisa {

            color: #9B3D55;

            font-weight: bold;

            white-space: nowrap;
        }


        .sisa-lunas {

            color: #287A45;

            font-weight: bold;

            white-space: nowrap;
        }


        .status {

            display: inline-block;

            padding:
                7px 12px;

            border-radius: 20px;

            background: #F0DCE4;

            color: #713B50;

            font-weight: bold;

            font-size: 12px;

            white-space: nowrap;
        }


        .aksi {

            display: flex;

            gap: 7px;

            align-items: center;
        }


        .aksi form {

            margin: 0;
        }


        .empty {

            text-align: center;

            padding: 35px;

            color: #987783;
        }


        .info-box {

            margin-top: 20px;

            padding:
                15px 18px;

            border-radius: 14px;

            background: #E1F0F6;

            color: #542C3D;

            font-size: 13px;
        }


        /* MOBILE */

        @media (max-width: 900px) {

            .sidebar {

                width: 220px;
            }

            .main {

                margin-left: 220px;

                padding: 20px;
            }

        }


        @media (max-width: 700px) {

            .sidebar {

                position: relative;

                width: 100%;

                height: auto;

                min-height: auto;
            }

            .main {

                margin-left: 0;

                padding: 15px;
            }

            .topbar {

                flex-direction: column;

                align-items: flex-start;
            }

            .header {

                flex-direction: column;

                align-items: flex-start;
            }

        }

    </style>

</head>


<body>


{{-- =========================
     SIDEBAR
========================= --}}

<aside class="sidebar">


    <div class="logo">

        <h1>
            NAYS
        </h1>

        <span>
            TAILOR
        </span>

    </div>


    <div class="menu-title">
        Menu Utama
    </div>


    <nav class="menu">


        <a href="{{ route('dashboard') }}">

            <span class="menu-icon">
                🏠
            </span>

            Dashboard

        </a>


        <a href="{{ route('pelanggan.index') }}">

            <span class="menu-icon">
                👥
            </span>

            Pelanggan

        </a>


        <a href="{{ route('layanan.index') }}">

            <span class="menu-icon">
                ✂️
            </span>

            Layanan

        </a>


        <a
            href="{{ route('pesanan.index') }}"
            class="active"
        >

            <span class="menu-icon">
                🧵
            </span>

            Pesanan

        </a>


        <a href="{{ route('ukuran.index') }}">

            <span class="menu-icon">
                📏
            </span>

            Ukuran

        </a>


        <a href="{{ route('pembayaran.index') }}">

            <span class="menu-icon">
                💳
            </span>

            Pembayaran

        </a>


    </nav>


    <div class="sidebar-bottom">


        <div class="menu-title">
            Laporan
        </div>


        <nav class="menu">

            <a href="{{ route('laporan.index') }}">

                <span class="menu-icon">
                    📊
                </span>

                Laporan

            </a>

        </nav>


        <div class="admin-box">

            <div class="admin-name">
                👩🏻‍💼 Admin Nays Tailor
            </div>

            <div class="admin-role">
                Administrator
            </div>

        </div>


        <form
            action="{{ route('logout') }}"
            method="POST"
        >

            @csrf

            <button
                type="submit"
                class="logout"
            >
                🚪 Keluar
            </button>

        </form>


    </div>


</aside>



{{-- =========================
     MAIN
========================= --}}

<main class="main">


    <div class="topbar">

        <div>

            <h1>
                Data Pesanan
            </h1>

            <p>
                Sistem Informasi Jasa Jahit Celana & Dress Anak
            </p>

        </div>


        <div class="admin-label">

            👩🏻‍💼 Admin Nays Tailor

        </div>

    </div>



    <div class="card">


        <div class="header">

            <div>

                <h2>
                    🧵 Data Pesanan
                </h2>

                <p>
                    Kelola pesanan jahit pelanggan.
                </p>

            </div>


            <a
                href="{{ route('pesanan.create') }}"
                class="btn btn-primary"
            >

                + Buat Pesanan

            </a>

        </div>



        @if(session('success'))

            <div class="success">

                {{ session('success') }}

            </div>

        @endif



        <div class="table-wrapper">

            <table>

                <thead>

                    <tr>

                        <th>No</th>

                        <th>Kode</th>

                        <th>Pelanggan</th>

                        <th>Layanan</th>

                        <th>Tanggal Masuk</th>

                        <th>Total</th>

                        <th>DP</th>

                        <th>Sisa</th>

                        <th>Status</th>

                        <th>Aksi</th>

                    </tr>

                </thead>


                <tbody>


                @forelse($pesanans as $index => $pesanan)


                    @php

                        $total = (float) $pesanan->harga;

                        $dp = (float) $pesanan->dp;

                        $sisa = $total - $dp;

                    @endphp


                    <tr>


                        <td>
                            {{ $index + 1 }}
                        </td>


                        <td class="kode">

                            {{ $pesanan->kode_pesanan }}

                        </td>


                        <td>

                            {{ $pesanan->pelanggan->nama ?? '-' }}

                        </td>


                        <td>

                            {{ $pesanan->layanan->nama_layanan ?? '-' }}

                        </td>


                        <td>

                            {{ $pesanan->tanggal_masuk
                                ? $pesanan->tanggal_masuk->format('d-m-Y')
                                : '-'
                            }}

                        </td>


                        <td class="money">

                            Rp
                            {{ number_format(
                                $total,
                                0,
                                ',',
                                '.'
                            ) }}

                        </td>


                        <td class="dp">

                            Rp
                            {{ number_format(
                                $dp,
                                0,
                                ',',
                                '.'
                            ) }}

                        </td>


                        <td>

                            @if($sisa <= 0)

                                <span class="sisa-lunas">
                                    Lunas
                                </span>

                            @else

                                <span class="sisa">

                                    Rp
                                    {{ number_format(
                                        $sisa,
                                        0,
                                        ',',
                                        '.'
                                    ) }}

                                </span>

                            @endif

                        </td>


                        <td>

                            <span class="status">

                                {{ $pesanan->status }}

                            </span>

                        </td>


                        <td>

                            <div class="aksi">


                                <a
                                    href="{{ route(
                                        'pesanan.edit',
                                        $pesanan->id
                                    ) }}"
                                    class="btn btn-edit"
                                >
                                    Edit
                                </a>


                                <form
                                    action="{{ route(
                                        'pesanan.destroy',
                                        $pesanan->id
                                    ) }}"
                                    method="POST"

                                    onsubmit="
                                        return confirm(
                                            'Yakin ingin menghapus pesanan ini?'
                                        );
                                    "
                                >

                                    @csrf

                                    @method('DELETE')


                                    <button
                                        type="submit"
                                        class="btn btn-delete"
                                    >
                                        Hapus
                                    </button>

                                </form>


                            </div>

                        </td>


                    </tr>


                @empty


                    <tr>

                        <td
                            colspan="10"
                            class="empty"
                        >

                            Belum ada data pesanan.

                        </td>

                    </tr>


                @endforelse


                </tbody>

            </table>

        </div>


        <div class="info-box">

            💡 <strong>Keterangan:</strong>

            Total adalah harga keseluruhan pesanan.
            DP adalah uang muka yang sudah dibayar.
            Sisa dihitung otomatis dari
            <strong>Total − DP</strong>.

        </div>


    </div>


</main>


</body>

</html>