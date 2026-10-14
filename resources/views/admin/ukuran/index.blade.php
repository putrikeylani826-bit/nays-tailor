<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Ukuran - NAYS TAILOR</title>

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

            scrollbar-width: thin;
            scrollbar-color: rgba(255,255,255,.35) transparent;
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

        .logo {
            text-align: center;
            color: white;
            margin-bottom: 35px;
        }

        .logo h1 {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            letter-spacing: 3px;
        }

        .logo span {
            display: block;
            font-size: 12px;
            letter-spacing: 6px;
            margin-top: -3px;
            opacity: .9;
        }

        .menu-title {
            color: rgba(255,255,255,.6);
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin: 0 12px 12px;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .menu a {
            text-decoration: none;
            color: rgba(255,255,255,.82);
            padding: 13px 14px;
            border-radius: 12px;

            display: flex;
            align-items: center;
            gap: 12px;

            font-size: 14px;
            font-weight: 500;

            transition: .2s;
        }

        .menu a:hover {
            background: rgba(255,255,255,.12);
            color: white;
        }

        .menu a.active {
            background: rgba(255,255,255,.18);
            color: white;
            box-shadow: inset 3px 0 #FFE1E9;
        }

        .menu-icon {
            width: 25px;
            text-align: center;
            font-size: 17px;
        }

        .sidebar-bottom {
            margin-top: 25px;
            padding-top: 25px;
            padding-bottom: 10px;
            border-top: 1px solid rgba(255,255,255,.15);
            flex-shrink: 0;
        }

        .logout-btn {
            width: 100%;
            border: none;
            background: rgba(255,255,255,.1);
            color: white;
            padding: 13px;
            border-radius: 12px;
            cursor: pointer;
            font-family: inherit;
            font-size: 14px;
        }

        .logout-btn:hover {
            background: rgba(255,255,255,.18);
        }

        /* MAIN */
        .main {
            margin-left: 255px;
            min-height: 100vh;
            padding: 35px 40px;
        }

        .top-title {
            margin-bottom: 30px;
        }

        .brand {
            color: #713B50;
            font-family: 'Playfair Display', serif;
            font-size: 18px;
            font-weight: 700;
        }

        .top-title h2 {
            margin-top: 5px;
            font-family: 'Playfair Display', serif;
            font-size: 30px;
            color: #542C3D;
        }

        .top-title p {
            margin-top: 5px;
            color: #8b7079;
            font-size: 14px;
        }

        .admin {
            float: right;
            margin-top: -65px;
            background: white;
            padding: 10px 16px;
            border-radius: 30px;
            box-shadow: 0 5px 20px rgba(113,59,80,.08);
            font-size: 13px;
            font-weight: 600;
        }

        /* CARD */
        .card {
            background: white;
            border-radius: 20px;
            padding: 28px;
            box-shadow: 0 8px 30px rgba(113,59,80,.08);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 22px;
        }

        .card-header h3 {
            color: #542C3D;
            font-family: 'Playfair Display', serif;
            font-size: 21px;
        }

        .card-header p {
            color: #9b8089;
            font-size: 13px;
            margin-top: 4px;
        }

        .btn-add {
            text-decoration: none;
            background: #F28FA9;
            color: white;
            padding: 11px 17px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 600;
        }

        .btn-add:hover {
            background: #E97895;
        }

        /* TABLE */
        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 950px;
        }

        th {
            background: #FFE1E9;
            color: #713B50;
            padding: 14px 12px;
            text-align: left;
            font-size: 12px;
            white-space: nowrap;
        }

        th:first-child {
            border-radius: 10px 0 0 10px;
        }

        th:last-child {
            border-radius: 0 10px 10px 0;
        }

        td {
            padding: 15px 12px;
            border-bottom: 1px solid #f3e5e9;
            font-size: 13px;
            white-space: nowrap;
        }

        tr:hover td {
            background: #fff9fb;
        }

        .customer-name {
            font-weight: 600;
            color: #713B50;
        }

        .order-code {
            color: #7FAABD;
            font-weight: 600;
        }

        .measurement {
            color: #5d4a51;
        }

        .actions {
            display: flex;
            gap: 7px;
        }

        .btn-edit {
            text-decoration: none;
            background: #E1F0F6;
            color: #52798A;
            padding: 8px 12px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 12px;
        }

        .btn-delete {
            border: none;
            background: #F0DCE4;
            color: #8A4962;
            padding: 8px 12px;
            border-radius: 8px;
            font-family: inherit;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
        }

        .btn-edit:hover {
            background: #cfe7f0;
        }

        .btn-delete:hover {
            background: #e8cbd6;
        }

        .empty {
            text-align: center;
            padding: 35px;
            color: #9b8089;
        }

        @media(max-width: 900px) {
            .sidebar {
                width: 220px;
            }

            .main {
                margin-left: 220px;
                padding: 25px;
            }
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<aside class="sidebar">

    <div class="logo">
        <h1>NAYS</h1>
        <span>TAILOR</span>
    </div>

    <div class="menu-title">
        Menu Utama
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

        <a href="{{ route('layanan.index') }}">
            <span class="menu-icon">✂️</span>
            Layanan
        </a>

        <a href="{{ route('pesanan.index') }}">
            <span class="menu-icon">🧵</span>
            Pesanan
        </a>

        <a href="{{ route('ukuran.index') }}" class="active">
            <span class="menu-icon">📏</span>
            Ukuran
        </a>

        <a href="{{ route('pembayaran.index') }}">
            <span class="menu-icon">💳</span>
            Pembayaran
        </a>

    </nav>

    <div class="menu-title" style="margin-top:28px;">
        Laporan
    </div>

    <nav class="menu">
        <a href="{{ route('laporan.index') }}">
            <span class="menu-icon">📊</span>
            Laporan
        </a>
    </nav>

    <div class="sidebar-bottom">

        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button type="submit" class="logout-btn">
                🚪 Keluar
            </button>
        </form>

    </div>

</aside>


<!-- MAIN -->
<main class="main">

    <div class="top-title">

        <div class="brand">
            NAYS TAILOR
        </div>

        <h2>Data Ukuran</h2>

        <p>
            Sistem Informasi Jasa Jahit Celana & Dress Anak
        </p>

        <div class="admin">
            👩🏻‍💼 Admin Nays Tailor
        </div>

    </div>


    <div class="card">

        <div class="card-header">

            <div>
                <h3>📏 Data Ukuran</h3>

                <p>
                    Data pengukuran pelanggan.
                </p>
            </div>

            <a href="{{ route('ukuran.create') }}" class="btn-add">
                + Tambah Ukuran
            </a>

        </div>


        <div class="table-wrapper">

            <table>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pelanggan</th>
                        <th>Pesanan</th>
                        <th>Layanan</th>
                        <th>Dada</th>
                        <th>Pinggang</th>
                        <th>Pinggul</th>
                        <th>P. Baju</th>
                        <th>P. Celana</th>
                        <th>Paha</th>
                        <th>Lengan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($ukurans as $index => $ukuran)

                    <tr>

                        <td>
                            {{ $index + 1 }}
                        </td>

                        {{-- PELANGGAN --}}
                        <td>
                            <span class="customer-name">
                                {{ $ukuran->pesanan->pelanggan->nama ?? '-' }}
                            </span>
                        </td>

                        {{-- KODE PESANAN --}}
                        <td>
                            <span class="order-code">
                                {{ $ukuran->pesanan->kode_pesanan ?? '-' }}
                            </span>
                        </td>

                        {{-- LAYANAN --}}
                        <td>
                            {{ $ukuran->pesanan->layanan->nama_layanan ?? '-' }}
                        </td>

                        {{-- UKURAN --}}
                        <td class="measurement">
                            {{ $ukuran->lingkar_dada !== null ? number_format($ukuran->lingkar_dada, 2) . ' cm' : '-' }}
                        </td>

                        <td class="measurement">
                            {{ $ukuran->lingkar_pinggang !== null ? number_format($ukuran->lingkar_pinggang, 2) . ' cm' : '-' }}
                        </td>

                        <td class="measurement">
                            {{ $ukuran->lingkar_pinggul !== null ? number_format($ukuran->lingkar_pinggul, 2) . ' cm' : '-' }}
                        </td>

                        <td class="measurement">
                            {{ $ukuran->panjang_baju !== null ? number_format($ukuran->panjang_baju, 2) . ' cm' : '-' }}
                        </td>

                        <td class="measurement">
                            {{ $ukuran->panjang_celana !== null ? number_format($ukuran->panjang_celana, 2) . ' cm' : '-' }}
                        </td>

                        <td class="measurement">
                            {{ $ukuran->lingkar_paha !== null ? number_format($ukuran->lingkar_paha, 2) . ' cm' : '-' }}
                        </td>

                        <td class="measurement">
                            {{ $ukuran->lingkar_lengan !== null ? number_format($ukuran->lingkar_lengan, 2) . ' cm' : '-' }}
                        </td>

                        {{-- AKSI --}}
                        <td>

                            <div class="actions">

                                <a
                                    href="{{ route('ukuran.edit', $ukuran->id) }}"
                                    class="btn-edit"
                                >
                                    Edit
                                </a>

                                <form
                                    action="{{ route('ukuran.destroy', $ukuran->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus data ukuran ini?')"
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
                        <td colspan="12" class="empty">
                            Belum ada data ukuran.
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