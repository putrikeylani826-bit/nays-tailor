<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Layanan - Nays Tailor</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: #FFF4F7;
            color: #4F3740;
        }

        .sidebar {
            width: 255px;
            height: 100vh;
            background: linear-gradient(180deg,#6f3d55 0%,#814761 50%,#9c5c76 100%);
            padding: 28px 18px;
            display: flex;
            flex-direction: column;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            overflow-y: auto;
            box-shadow: 5px 0 25px rgba(111,61,85,.12);
        }

        .brand {
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }

        .brand-icon {
            width: 58px;
            height: 58px;
            margin: auto auto 10px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255,255,255,.16);
            font-size: 28px;
        }

        .brand h2 {
            font-family: 'Playfair Display', serif;
            font-size: 22px;
        }

        .brand p {
            font-size: 12px;
            opacity: .8;
            margin-top: 4px;
        }

        .menu-title {
            color: rgba(255,255,255,.55);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            margin: 10px;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .menu a {
            color: rgba(255,255,255,.86);
            text-decoration: none;
            padding: 12px 14px;
            border-radius: 13px;
            display: flex;
            align-items: center;
            gap: 11px;
            font-size: 14px;
        }

        .menu a:hover,
        .menu a.active {
            background: rgba(255,255,255,.15);
            color: white;
        }

        .menu-icon {
            width: 25px;
            text-align: center;
            font-size: 17px;
        }

        .sidebar-bottom {
            margin-top: 25px;
            padding-top: 25px;
            border-top: 1px solid rgba(255,255,255,.15);
        }

        .logout {
            width: 100%;
            border: none;
            background: rgba(255,255,255,.1);
            color: white;
            padding: 12px;
            border-radius: 12px;
            font-family: inherit;
            cursor: pointer;
        }

        .main {
            margin-left: 255px;
            min-height: 100vh;
            padding: 35px 40px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-family: 'Playfair Display', serif;
            color: #713B50;
            font-size: 32px;
        }

        .header p {
            color: #8b6d78;
            margin-top: 5px;
            font-size: 14px;
        }

        .admin {
            background: white;
            padding: 12px 18px;
            border-radius: 14px;
            color: #713B50;
            font-weight: 600;
            box-shadow: 0 5px 20px rgba(113,59,80,.08);
        }

        .card {
            background: white;
            border-radius: 22px;
            padding: 28px;
            box-shadow: 0 10px 35px rgba(113,59,80,.08);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 22px;
        }

        .card-title {
            font-family: 'Playfair Display', serif;
            font-size: 22px;
            color: #713B50;
        }

        .card-subtitle {
            color: #9b7d87;
            font-size: 13px;
            margin-top: 4px;
        }

        .btn-add {
            text-decoration: none;
            background: #F28FA9;
            color: white;
            padding: 12px 18px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 14px;
        }

        .btn-add:hover {
            background: #E97895;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #FFF4F7;
            color: #713B50;
            text-align: left;
            padding: 14px;
            font-size: 13px;
        }

        td {
            padding: 16px 14px;
            border-bottom: 1px solid #f0e3e7;
            font-size: 14px;
            vertical-align: middle;
        }

        tr:hover td {
            background: #fffafb;
        }

        .service-name {
            font-weight: 700;
            color: #713B50;
        }

        .price {
            font-weight: 700;
            color: #7FAABD;
            white-space: nowrap;
        }

        .description {
            color: #7b646d;
            line-height: 1.5;
        }

        .actions {
            display: flex;
            gap: 7px;
        }

        .btn-edit,
        .btn-delete {
            border: none;
            padding: 8px 12px;
            border-radius: 9px;
            font-family: inherit;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-edit {
            background: #E1F0F6;
            color: #527D91;
        }

        .btn-delete {
            background: #FFE1E9;
            color: #B34F6B;
        }

        .empty {
            text-align: center;
            padding: 40px;
            color: #9b7d87;
        }
    </style>
</head>

<body>

<aside class="sidebar">

    <div class="brand">
        <div class="brand-icon">🧵</div>
        <h2>Nays Tailor</h2>
        <p>Sistem Informasi Jahit</p>
    </div>

    <div class="menu-title">
        MENU UTAMA
    </div>

    <nav class="menu">

        <a href="{{ route('dashboard') }}">
            <span class="menu-icon">🏠</span>
            Dashboard
        </a>

        <a href="{{ route('pelanggan.index') }}">
            <span class="menu-icon">👥</span>
            Pelanggan
        </a>

        <a href="{{ route('layanan.index') }}" class="active">
            <span class="menu-icon">✂️</span>
            Layanan
        </a>

        <a href="{{ route('pesanan.index') }}">
            <span class="menu-icon">🧵</span>
            Pesanan
        </a>

        <a href="{{ route('ukuran.index') }}">
            <span class="menu-icon">📏</span>
            Ukuran
        </a>

        <a href="{{ route('pembayaran.index') }}">
            <span class="menu-icon">💳</span>
            Pembayaran
        </a>

        <a href="{{ route('laporan.index') }}">
            <span class="menu-icon">📊</span>
            Laporan
        </a>

    </nav>

    <div class="sidebar-bottom">

        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button class="logout" type="submit">
                🚪 &nbsp; Keluar
            </button>
        </form>

    </div>

</aside>


<main class="main">

    <div class="header">

        <div>
            <h1>NAYS TAILOR</h1>

            <p>
                Sistem Informasi Jasa Jahit Celana & Dress Anak
            </p>
        </div>

        <div class="admin">
            👩🏻‍💼 Admin Nays Tailor
        </div>

    </div>


    <div class="card">

        <div class="card-header">

            <div>
                <div class="card-title">
                    ✂️ Data Layanan
                </div>

                <div class="card-subtitle">
                    Kelola layanan jahit Nays Tailor.
                </div>
            </div>

            <a
                href="{{ route('layanan.create') }}"
                class="btn-add"
            >
                + Tambah Layanan
            </a>

        </div>


        @if(session('success'))

            <div style="
                background:#E1F0F6;
                color:#527D91;
                padding:13px 16px;
                border-radius:12px;
                margin-bottom:20px;
                font-size:14px;
                font-weight:600;
            ">
                ✓ {{ session('success') }}
            </div>

        @endif


        <table>

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Layanan</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse($layanans as $index => $layanan)

                    <tr>

                        <td>
                            {{ $index + 1 }}
                        </td>

                        <td>
                            <div class="service-name">
                                {{ $layanan->nama_layanan }}
                            </div>
                        </td>

                        <td>
                            <div class="price">
                                Rp {{ number_format($layanan->harga_mulai, 0, ',', '.') }}
                            </div>
                        </td>

                        <td>
                            <div class="description">
                                {{ $layanan->deskripsi ?: '-' }}
                            </div>
                        </td>

                        <td>

                            <div class="actions">

                                <a
                                    href="{{ route('layanan.edit', $layanan->id) }}"
                                    class="btn-edit"
                                >
                                    Edit
                                </a>

                                <form
                                    action="{{ route('layanan.destroy', $layanan->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus layanan ini?')"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn-delete"
                                    >
                                        Hapus
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="5" class="empty">
                            Belum ada data layanan.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</main>

</body>
</html>