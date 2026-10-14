<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Layanan - Nays Tailor</title>

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
            min-height: 100vh;
        }

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

        .sidebar::-webkit-scrollbar-thumb:hover {
            background: rgba(255,255,255,.55);
        }

        .brand {
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }

        .brand-icon {
            width: 58px;
            height: 58px;
            margin: auto;
            border-radius: 18px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: rgba(255,255,255,.16);

            font-size: 28px;

            margin-bottom: 10px;
        }

        .brand h2 {
            font-family: 'Playfair Display', serif;
            font-size: 22px;
            margin-bottom: 4px;
        }

        .brand p {
            font-size: 12px;
            opacity: .8;
        }

        .menu-title {
            color: rgba(255,255,255,.55);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            margin: 10px 10px;
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

            transition: .2s;
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
            padding-bottom: 10px;

            border-top: 1px solid rgba(255,255,255,.15);

            flex-shrink: 0;
        }

        .logout {
            width: 100%;

            border: none;
            background: rgba(255,255,255,.1);

            color: white;

            padding: 12px;
            border-radius: 12px;

            font-family: inherit;
            font-size: 14px;

            cursor: pointer;
        }

        .logout:hover {
            background: rgba(255,255,255,.18);
        }

        .main {
            margin-left: 255px;
            min-height: 100vh;
            padding: 35px 40px;
        }

        .top {
            display: flex;
            justify-content: space-between;
            align-items: center;

            margin-bottom: 30px;
        }

        .top h1 {
            font-family: 'Playfair Display', serif;
            color: #713B50;
            font-size: 30px;
        }

        .top p {
            color: #8b6d78;
            margin-top: 5px;
            font-size: 14px;
        }

        .back {
            text-decoration: none;
            color: #713B50;
            background: white;

            padding: 11px 17px;

            border-radius: 12px;

            font-weight: 600;
            font-size: 14px;

            box-shadow: 0 5px 18px rgba(113,59,80,.08);
        }

        .card {
            background: white;
            border-radius: 22px;
            padding: 32px;

            max-width: 850px;

            box-shadow: 0 10px 35px rgba(113,59,80,.08);
        }

        .form-group {
            margin-bottom: 22px;
        }

        label {
            display: block;

            font-size: 14px;
            font-weight: 700;

            color: #713B50;

            margin-bottom: 8px;
        }

        input,
        textarea {
            width: 100%;

            border: 1px solid #ead8df;

            background: #fffafb;

            border-radius: 12px;

            padding: 13px 15px;

            font-family: inherit;
            font-size: 14px;

            color: #4F3740;

            outline: none;

            transition: .2s;
        }

        input:focus,
        textarea:focus {
            border-color: #F28FA9;

            box-shadow: 0 0 0 3px rgba(242,143,169,.12);
        }

        textarea {
            resize: vertical;
            min-height: 130px;
        }

        .hint {
            font-size: 12px;
            color: #9b7d87;
            margin-top: 6px;
        }

        .error {
            color: #c94f6d;
            font-size: 12px;
            margin-top: 6px;
        }

        .buttons {
            display: flex;
            justify-content: flex-end;
            gap: 10px;

            margin-top: 30px;
        }

        .btn {
            border: none;

            padding: 13px 22px;

            border-radius: 12px;

            font-family: inherit;
            font-size: 14px;
            font-weight: 700;

            cursor: pointer;

            text-decoration: none;
        }

        .btn-cancel {
            background: #F0DCE4;
            color: #713B50;
        }

        .btn-save {
            background: #F28FA9;
            color: white;
        }

        .btn-save:hover {
            background: #E97895;
        }

        @media(max-width: 800px) {
            .sidebar {
                width: 210px;
            }

            .main {
                margin-left: 210px;
                padding: 25px;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
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

                <button type="submit" class="logout">
                    🚪 &nbsp; Keluar
                </button>
            </form>

        </div>

    </aside>


    <!-- MAIN -->
    <main class="main">

        <div class="top">

            <div>
                <h1>Edit Layanan</h1>

                <p>
                    Perbarui informasi layanan Nays Tailor.
                </p>
            </div>

            <a href="{{ route('layanan.index') }}" class="back">
                ← Kembali
            </a>

        </div>


        <div class="card">

            <form
                action="{{ route('layanan.update', $layanan->id) }}"
                method="POST"
            >

                @csrf

                @method('PUT')


                <!-- NAMA -->
                <div class="form-group">

                    <label for="nama_layanan">
                        Nama Layanan
                    </label>

                    <input
                        type="text"
                        id="nama_layanan"
                        name="nama_layanan"
                        value="{{ old('nama_layanan', $layanan->nama_layanan) }}"
                        placeholder="Contoh: Dress Anak"
                        required
                    >

                    @error('nama_layanan')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- HARGA -->
                <div class="form-group">

                    <label for="harga_mulai">
                        Harga Mulai
                    </label>

                    <input
                        type="number"
                        id="harga_mulai"
                        name="harga_mulai"
                        value="{{ old('harga_mulai', $layanan->harga_mulai) }}"
                        placeholder="Contoh: 150000"
                        min="0"
                        required
                    >

                    <div class="hint">
                        Masukkan harga dalam angka. Contoh: 150000
                    </div>

                    @error('harga_mulai')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- DESKRIPSI -->
                <div class="form-group">

                    <label for="deskripsi">
                        Deskripsi Layanan
                    </label>

                    <textarea
                        id="deskripsi"
                        name="deskripsi"
                        placeholder="Masukkan deskripsi layanan..."
                    >{{ old('deskripsi', $layanan->deskripsi) }}</textarea>

                    @error('deskripsi')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- GAMBAR -->
                <div class="form-group">

                    <label for="gambar">
                        Gambar
                    </label>

                    <input
                        type="text"
                        id="gambar"
                        name="gambar"
                        value="{{ old('gambar', $layanan->gambar) }}"
                        placeholder="Nama/path gambar (opsional)"
                    >

                    <div class="hint">
                        Kosongkan jika belum menggunakan gambar.
                    </div>

                    @error('gambar')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- BUTTON -->
                <div class="buttons">

                    <a
                        href="{{ route('layanan.index') }}"
                        class="btn btn-cancel"
                    >
                        Batal
                    </a>

                    <button
                        type="submit"
                        class="btn btn-save"
                    >
                        💾 Simpan Perubahan
                    </button>

                </div>

            </form>

        </div>

    </main>

</body>
</html>