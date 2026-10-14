<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Nays Tailor</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'DM Sans', sans-serif;
            background:
                linear-gradient(135deg, #fff0f5, #f9dce7, #fcecf2);
            color: #543542;
            min-height: 100vh;
        }

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            width: 245px;
            padding: 28px 18px;
            background: linear-gradient(
                180deg,
                #713f55,
                #8d4d68,
                #a9607b
            );
            color: white;
            overflow-y: auto;
            box-shadow: 5px 0 25px rgba(113,63,85,.15);
        }

        .logo {
            text-align: center;
            margin-bottom: 35px;
        }

        .logo h1 {
            font-family: 'Playfair Display', serif;
            font-size: 30px;
            letter-spacing: 3px;
            margin: 0;
        }

        .logo p {
            margin: 4px 0 0;
            font-size: 11px;
            letter-spacing: 4px;
            opacity: .8;
        }

        .logo-line {
            width: 50px;
            height: 2px;
            background: #f4cad8;
            margin: 12px auto 0;
        }

        .menu-title {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            opacity: .6;
            margin: 20px 10px 9px;
        }

        .menu-item {
            display: flex;
            align-items: center;
            gap: 12px;
            color: white;
            text-decoration: none;
            padding: 12px 14px;
            margin-bottom: 6px;
            border-radius: 12px;
            font-size: 14px;
            transition: .25s;
        }

        .menu-item:hover,
        .menu-item.active {
            background: rgba(255,255,255,.16);
            transform: translateX(3px);
        }

        .menu-icon {
            width: 25px;
            text-align: center;
            font-size: 17px;
        }

        .logout {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,.15);
        }

        .logout button {
            width: 100%;
            border: 0;
            padding: 12px;
            border-radius: 11px;
            background: #f8dce5;
            color: #713f55;
            font-weight: 700;
            cursor: pointer;
        }

        .main {
            margin-left: 245px;
            padding: 35px;
            min-height: 100vh;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 28px;
        }

        .title small {
            color: #a05e73;
            letter-spacing: 2px;
            font-size: 11px;
        }

        .title h1 {
            font-family: 'Playfair Display', serif;
            color: #713f55;
            font-size: 32px;
            margin: 5px 0;
        }

        .title p {
            margin: 0;
            color: #92707d;
        }

        .admin {
            background: #f8dce5;
            padding: 11px 18px;
            border-radius: 14px;
            color: #713f55;
            font-weight: 600;
        }

        .content-card {
            background: rgba(255, 238, 245, .88);
            border: 1px solid rgba(180,100,130,.14);
            border-radius: 22px;
            padding: 25px;
            box-shadow: 0 10px 35px rgba(113,63,85,.09);
        }

        .button {
            display: inline-block;
            border: 0;
            padding: 11px 18px;
            border-radius: 11px;
            background: #814761;
            color: white;
            text-decoration: none;
            font-family: inherit;
            font-weight: 600;
            cursor: pointer;
        }

        .button:hover {
            background: #69384f;
        }

        .button-soft {
            background: #f2cdd9;
            color: #713f55;
        }

        .button-danger {
            background: #d9859b;
            color: white;
        }

        .table-wrap {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            padding: 14px;
            text-align: left;
            background: #eec5d3;
            color: #633747;
            font-size: 13px;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid #efd6df;
            background: rgba(255,247,250,.55);
            font-size: 13px;
        }

        tr:hover td {
            background: #fce4ec;
        }

        .badge {
            display: inline-block;
            padding: 6px 11px;
            border-radius: 20px;
            background: #edc3d1;
            color: #713f55;
            font-size: 11px;
            font-weight: 700;
        }

        .actions {
            display: flex;
            gap: 7px;
            flex-wrap: wrap;
        }

        .form-card {
            max-width: 850px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: 600;
            color: #713f55;
        }

        input,
        textarea,
        select {
            width: 100%;
            border: 1px solid #dfb9c7;
            border-radius: 11px;
            padding: 12px 14px;
            background: #fff3f7;
            color: #543542;
            font-family: inherit;
            outline: none;
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: #a9607b;
            box-shadow: 0 0 0 3px rgba(169,96,123,.12);
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        .grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .error {
            color: #bd526d;
            font-size: 12px;
            margin-top: 5px;
        }

        .empty {
            text-align: center;
            padding: 40px !important;
            color: #a17f8e;
        }

        .report-card {
            background: linear-gradient(135deg,#e7b5c6,#f3d2dd);
            padding: 25px;
            border-radius: 20px;
            margin-bottom: 25px;
        }

        .report-number {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            color: #633747;
            margin-top: 8px;
        }

        @media(max-width:800px) {
            .sidebar {
                width: 210px;
            }

            .main {
                margin-left: 210px;
                padding: 20px;
            }

            .grid-2 {
                grid-template-columns: 1fr;
            }

            .topbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
        }
    </style>

    @yield('head')
</head>

<body>

<aside class="sidebar">

    <div class="logo">
        <h1>NAYS</h1>
        <p>TAILOR</p>
        <div class="logo-line"></div>
    </div>

    <div class="menu-title">Menu Utama</div>

    <a href="{{ route('dashboard') }}" class="menu-item">
        <span class="menu-icon">🏠</span>
        Dashboard
    </a>

    <a href="{{ route('pelanggan.index') }}" class="menu-item">
        <span class="menu-icon">👥</span>
        Pelanggan
    </a>

    <a href="{{ route('layanan.index') }}" class="menu-item">
        <span class="menu-icon">✂️</span>
        Layanan
    </a>

    <a href="{{ route('pesanan.index') }}" class="menu-item">
        <span class="menu-icon">🧵</span>
        Pesanan
    </a>

    <a href="{{ route('ukuran.index') }}" class="menu-item">
        <span class="menu-icon">📏</span>
        Ukuran
    </a>

    <a href="{{ route('pembayaran.index') }}" class="menu-item">
        <span class="menu-icon">💳</span>
        Pembayaran
    </a>

    <div class="menu-title">Laporan</div>

    <a href="{{ route('laporan.index') }}" class="menu-item">
        <span class="menu-icon">📊</span>
        Laporan
    </a>

    <div class="logout">

        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button type="submit">
                🚪 Keluar
            </button>
        </form>

    </div>

</aside>

<main class="main">

    <div class="topbar">

        <div class="title">
            <small>NAYS TAILOR</small>

            <h1>
                @yield('page-title')
            </h1>

            <p>
                Sistem Informasi Jasa Jahit Celana & Dress Anak
            </p>
        </div>

        <div class="admin">
            👩🏻‍💼 {{ Auth::user()->name ?? 'Admin' }}
        </div>

    </div>

    @yield('content')

</main>

</body>
</html>