<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - NAYS TAILOR</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: #fff8f5;
            color: #4f2939;
        }

        .dashboard-wrapper {
            min-height: 100vh;
        }

        /* SIDEBAR */
        .sidebar {
            width: 255px;
            height: 100vh;
            position: fixed;
            inset: 0 auto 0 0;
            overflow-y: auto;
            padding: 28px 18px;
            background: linear-gradient(180deg, #6f3d55, #814761 50%, #9c5c76);
            box-shadow: 5px 0 25px rgba(111,61,85,.12);
            scrollbar-width: thin;
            scrollbar-color: rgba(255,255,255,.35) transparent;
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo h1 {
            font: 700 28px 'Playfair Display', serif;
            letter-spacing: 3px;
            color: white;
        }

        .logo p {
            margin-top: 3px;
            font-size: 10px;
            letter-spacing: 5px;
            color: #f8dce5;
        }

        .logo-line {
            width: 45px;
            height: 2px;
            background: #f3c8d5;
            margin: 13px auto 0;
            border-radius: 20px;
        }

        .menu-title {
            color: #f4cbd7;
            font-size: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin: 20px 10px 10px;
        }

        .sidebar-menu {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        .menu-item {
            display: flex;
            align-items: center;
            gap: 13px;
            width: 100%;
            padding: 13px 15px;
            border-radius: 12px;
            text-decoration: none;
            color: #fff5f7;
            font-size: 14px;
            font-weight: 500;
            transition: .2s ease;
        }

        .menu-icon {
            width: 24px;
            min-width: 24px;
            text-align: center;
            font-size: 17px;
        }

        .menu-item:hover {
            background: rgba(255,255,255,.13);
            transform: translateX(3px);
        }

        .menu-item.active {
            background: #f8e1e7;
            color: #713e55;
        }

        .sidebar-bottom {
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,.15);
        }

        .logout-button {
            width: 100%;
            padding: 13px 15px;
            display: flex;
            align-items: center;
            gap: 13px;
            border: none;
            border-radius: 12px;
            background: white;
            color: #743e56;
            font-family: inherit;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
        }

        .logout-button:hover {
            background: #f9dfe7;
        }

        /* MAIN CONTENT */
        .main-content {
            margin-left: 255px;
            min-height: 100vh;
            padding: 35px 40px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .page-title h2 {
            font: 700 32px 'Playfair Display', serif;
            color: #552d3e;
        }

        .page-title p {
            margin-top: 6px;
            color: #967080;
            font-size: 14px;
        }

        .admin-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            background: white;
            padding: 9px 15px;
            border-radius: 40px;
            box-shadow: 0 5px 20px rgba(111,61,85,.08);
        }

        .admin-avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #f3d6df;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .admin-info strong {
            display: block;
            color: #593143;
            font-size: 13px;
        }

        .admin-info span {
            font-size: 11px;
            color: #a27c8c;
        }

        /* WELCOME */
        .welcome-card {
            background: linear-gradient(120deg, #f7e3e8, #fff4ef);
            border: 1px solid #f1d8df;
            border-radius: 22px;
            padding: 30px 35px;
            margin-bottom: 28px;
        }

        .welcome-card small {
            color: #9c5c76;
            font-size: 11px;
            letter-spacing: 2px;
        }

        .welcome-card h1 {
            font: 700 28px 'Playfair Display', serif;
            color: #593143;
            margin: 8px 0;
        }

        .welcome-card p {
            color: #896a78;
            font-size: 14px;
            max-width: 650px;
            line-height: 1.7;
        }

        /* STATISTIK */
        .section-title {
            font: 700 22px 'Playfair Display', serif;
            color: #593143;
            margin: 28px 0 16px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
            margin-bottom: 28px;
        }

        .stat-card {
            background: white;
            border-radius: 18px;
            padding: 22px;
            border: 1px solid #f2e1e5;
            box-shadow: 0 8px 25px rgba(111,61,85,.06);
        }

        .stat-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .stat-label {
            color: #9b7b89;
            font-size: 12px;
        }

        .stat-number {
            font-size: 27px;
            font-weight: 700;
            color: #5a3042;
            margin-top: 7px;
            overflow-wrap: anywhere;
        }

        .stat-icon {
            width: 45px;
            height: 45px;
            min-width: 45px;
            border-radius: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            background: #f7e1e7;
        }

        /* FOTO CELANA ANAK */
        .stat-icon-image {
            overflow: hidden;
            padding: 0;
            background: #f7e1e7;
        }

        .stat-icon-image img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 13px;
        }

        /* KARTU KONTEN */
        .content-grid {
            display: grid;
            grid-template-columns: minmax(0, 2fr) minmax(240px, 1fr);
            gap: 22px;
            margin-bottom: 25px;
        }

        .content-card {
            background: white;
            border-radius: 20px;
            padding: 25px;
            border: 1px solid #f2e1e5;
            box-shadow: 0 8px 25px rgba(111,61,85,.05);
            min-width: 0;
            margin-bottom: 25px;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
        }

        .card-header h3 {
            font: 700 20px 'Playfair Display', serif;
            color: #593143;
        }

        .card-header a {
            text-decoration: none;
            color: #9c5c76;
            font-size: 12px;
            white-space: nowrap;
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 480px;
        }

        th {
            text-align: left;
            padding: 12px 10px;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: .5px;
            color: #a17f8e;
            border-bottom: 1px solid #f1e3e6;
        }

        td {
            padding: 14px 10px;
            font-size: 13px;
            color: #684656;
            border-bottom: 1px solid #f6ecef;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .status {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 600;
            background: #f8e2e8;
            color: #854a61;
        }

        /* MENU CEPAT */
        .quick-menu {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
        }

        .quick-item {
            padding: 18px;
            background: #fff8f6;
            border: 1px solid #f2e0e5;
            border-radius: 14px;
            text-decoration: none;
            color: #65394b;
            transition: .2s ease;
        }

        .quick-item:hover {
            background: #f9e6eb;
            transform: translateY(-2px);
        }

        .quick-icon {
            font-size: 22px;
            margin-bottom: 8px;
        }

        .quick-item strong {
            display: block;
            font-size: 13px;
        }

        .quick-item span {
            display: block;
            margin-top: 4px;
            font-size: 11px;
            color: #a1808d;
        }

        .empty-row {
            text-align: center;
            padding: 25px;
            color: #a17f8e;
        }

        /* RESPONSIVE */
        @media (max-width: 1200px) {
            .stats-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .content-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 210px;
            }

            .main-content {
                margin-left: 210px;
                padding: 25px 20px;
            }

            .topbar {
                align-items: flex-start;
                flex-direction: column;
            }
        }

        @media (max-width: 520px) {
            .sidebar {
                width: 175px;
                padding: 20px 10px;
            }

            .main-content {
                margin-left: 175px;
                padding: 18px 12px;
            }

            .menu-item {
                padding: 11px 8px;
                gap: 7px;
                font-size: 12px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .welcome-card {
                padding: 22px 18px;
            }

            .welcome-card h1 {
                font-size: 23px;
            }

            .content-card {
                padding: 18px 12px;
            }

            .quick-menu {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
<div class="dashboard-wrapper">

    {{-- SIDEBAR --}}
    <aside class="sidebar">
        <div class="logo">
            <h1>NAYS</h1>
            <p>TAILOR</p>
            <div class="logo-line"></div>
        </div>

        <div class="menu-title">Menu Utama</div>

        <nav class="sidebar-menu">
            <a href="{{ route('dashboard') }}" class="menu-item active">
                <span class="menu-icon">🏠</span>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('pelanggan.index') }}" class="menu-item">
                <span class="menu-icon">👥</span>
                <span>Pelanggan</span>
            </a>

            <a href="{{ route('layanan.index') }}" class="menu-item">
                <span class="menu-icon">✂️</span>
                <span>Layanan</span>
            </a>

            <a href="{{ route('pesanan.index') }}" class="menu-item">
                <span class="menu-icon">🧵</span>
                <span>Pesanan Jahit</span>
            </a>

            <a href="{{ route('ukuran.index') }}" class="menu-item">
                <span class="menu-icon">📏</span>
                <span>Ukuran</span>
            </a>

            <a href="{{ route('pembayaran.index') }}" class="menu-item">
                <span class="menu-icon">💳</span>
                <span>Pembayaran</span>
            </a>

            <a href="{{ route('laporan.index') }}" class="menu-item">
                <span class="menu-icon">📊</span>
                <span>Laporan</span>
            </a>

            <div class="menu-title">Produk Siap Pakai</div>

            <a href="{{ route('produk.index') }}" class="menu-item">
                <span class="menu-icon">👖</span>
                <span>Produk Jadi</span>
            </a>

            {{-- Sementara menuju katalog produk --}}
            <a href="{{ route('produk.index') }}" class="menu-item">
                <span class="menu-icon">🛍️</span>
                <span>Pesanan Produk</span>
            </a>
        </nav>

        <div class="sidebar-bottom">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-button">
                    <span class="menu-icon">🚪</span>
                    <span>Keluar</span>
                </button>
            </form>
        </div>
    </aside>

    {{-- KONTEN UTAMA --}}
    <main class="main-content">

        <div class="topbar">
            <div class="page-title">
                <h2>Dashboard</h2>
                <p>Kelola aktivitas NAYS TAILOR dengan mudah.</p>
            </div>

            <div class="admin-profile">
                <div class="admin-avatar">👩🏻‍💼</div>
                <div class="admin-info">
                    <strong>{{ Auth::user()->name ?? 'Admin Nays Tailor' }}</strong>
                    <span>Administrator</span>
                </div>
            </div>
        </div>

        <section class="welcome-card">
            <small>✦ NAYS TAILOR ✦</small>
            <h1>Selamat Datang, Admin!</h1>
            <p>
                Kelola pelanggan, layanan jahit, pesanan custom,
                pembayaran, laporan, dan produk celana anak siap pakai
                dari satu tempat.
            </p>
        </section>

        {{-- STATISTIK JAHIT --}}
        <h2 class="section-title">Layanan Jahit</h2>

        <section class="stats-grid">
            <div class="stat-card">
                <div class="stat-top">
                    <div>
                        <div class="stat-label">Total Pelanggan</div>
                        <div class="stat-number">{{ $totalPelanggan ?? 0 }}</div>
                    </div>
                    <div class="stat-icon">👥</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-top">
                    <div>
                        <div class="stat-label">Total Layanan</div>
                        <div class="stat-number">{{ $totalLayanan ?? 0 }}</div>
                    </div>
                    <div class="stat-icon">✂️</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-top">
                    <div>
                        <div class="stat-label">Pesanan Menunggu</div>
                        <div class="stat-number">{{ $pesananMenunggu ?? 0 }}</div>
                    </div>
                    <div class="stat-icon">🧵</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-top">
                    <div>
                        <div class="stat-label">Pesanan Selesai</div>
                        <div class="stat-number">{{ $pesananSelesai ?? 0 }}</div>
                    </div>
                    <div class="stat-icon">✨</div>
                </div>
            </div>
        </section>

        {{-- STATISTIK PRODUK --}}
        <h2 class="section-title">Produk Jadi</h2>

        <section class="stats-grid">

            {{-- JENIS PRODUK: MENGGUNAKAN FOTO --}}
            <div class="stat-card">
                <div class="stat-top">
                    <div>
                        <div class="stat-label">Jenis Produk</div>
                        <div class="stat-number">{{ $totalProduk ?? 0 }}</div>
                    </div>

                    <div class="stat-icon stat-icon-image">
                        <img
                            src="{{ asset('Image/celana_anak.jpeg') }}"
                            alt="Foto Celana Anak"
                        >
                    </div>
                </div>
            </div>

            {{-- TOTAL STOK --}}
            <div class="stat-card">
                <div class="stat-top">
                    <div>
                        <div class="stat-label">Total Stok</div>
                        <div class="stat-number">{{ $stokProduk ?? 0 }}</div>
                    </div>
                    <div class="stat-icon">📦</div>
                </div>
            </div>

            {{-- PESANAN PRODUK --}}
            <div class="stat-card">
                <div class="stat-top">
                    <div>
                        <div class="stat-label">Pesanan Produk</div>
                        <div class="stat-number">{{ $jumlahPesananProduk ?? 0 }}</div>
                    </div>
                    <div class="stat-icon">🛍️</div>
                </div>
            </div>

            {{-- PESANAN MENUNGGU --}}
            <div class="stat-card">
                <div class="stat-top">
                    <div>
                        <div class="stat-label">Menunggu Produk</div>
                        <div class="stat-number">{{ $pesananProdukMenunggu ?? 0 }}</div>
                    </div>
                    <div class="stat-icon">⏳</div>
                </div>
            </div>

        </section>

        {{-- PESANAN JAHIT DAN MENU CEPAT --}}
        <div class="content-grid">

            <section class="content-card">
                <div class="card-header">
                    <h3>Pesanan Jahit Terbaru</h3>
                    <a href="{{ route('pesanan.index') }}">Lihat Semua →</a>
                </div>

                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Pelanggan</th>
                                <th>Layanan</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($pesananTerbaru ?? [] as $pesanan)
                                <tr>
                                    <td>{{ $pesanan->kode_pesanan }}</td>
                                    <td>{{ $pesanan->pelanggan->nama ?? '-' }}</td>
                                    <td>{{ $pesanan->layanan->nama_layanan ?? '-' }}</td>
                                    <td>
                                        <span class="status">
                                            {{ $pesanan->status }}
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="empty-row">
                                        Belum ada pesanan jahit.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="content-card">
                <div class="card-header">
                    <h3>Menu Cepat</h3>
                </div>

                <div class="quick-menu">
                    <a href="{{ route('pelanggan.create') }}" class="quick-item">
                        <div class="quick-icon">👤</div>
                        <strong>Tambah Pelanggan</strong>
                        <span>Data pelanggan baru</span>
                    </a>

                    <a href="{{ route('layanan.create') }}" class="quick-item">
                        <div class="quick-icon">✂️</div>
                        <strong>Tambah Layanan</strong>
                        <span>Layanan jahit baru</span>
                    </a>

                    <a href="{{ route('pesanan.create') }}" class="quick-item">
                        <div class="quick-icon">🧵</div>
                        <strong>Buat Pesanan Jahit</strong>
                        <span>Tambahkan pesanan custom</span>
                    </a>

                    <a href="{{ route('pembayaran.create') }}" class="quick-item">
                        <div class="quick-icon">💳</div>
                        <strong>Pembayaran</strong>
                        <span>Catat pembayaran</span>
                    </a>

                    <a href="{{ route('produk.index') }}" class="quick-item">
    <div class="quick-icon">👖</div>
    <strong>Foto Produk</strong>
    <small>Lihat produk celana anak</small>
</a>

                    <a href="{{ route('produk.index') }}" class="quick-item">
                        <div class="quick-icon">🛍️</div>
                        <strong>Pesanan Produk</strong>
                        <span>Lihat katalog produk</span>
                    </a>
                </div>
            </section>

        </div>

        {{-- PESANAN PRODUK TERBARU --}}
        <section class="content-card">
            <div class="card-header">
                <h3>Pesanan Celana Anak Terbaru</h3>
                <a href="{{ route('produk.index') }}">Buka Katalog →</a>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Kode Pesanan</th>
                            <th>Pelanggan</th>
                            <th>Produk</th>
                            <th>Ukuran</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($pesananProdukTerbaru ?? [] as $item)
                            <tr>
                                <td>{{ $item->kode_pesanan }}</td>
                                <td>{{ $item->nama_pelanggan }}</td>
                                <td>{{ $item->nama_produk }}</td>
                                <td>{{ $item->ukuran }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>
                                    Rp{{ number_format($item->total_harga, 0, ',', '.') }}
                                </td>
                                <td>
                                    <span class="status">{{ $item->status }}</span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="empty-row">
                                    Belum ada pesanan produk celana anak.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>

    </main>
</div>
</body>
</html>