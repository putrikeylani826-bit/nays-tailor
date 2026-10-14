<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Ukuran - NAYS TAILOR</title>

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

        .logo {
            text-align: center;
            color: white;
            margin-bottom: 35px;
        }

        .logo h1 {
            font-family: 'Playfair Display', serif;
            font-size: 30px;
            letter-spacing: 4px;
        }

        .logo span {
            font-size: 11px;
            letter-spacing: 5px;
            opacity: .8;
        }

        .menu-title {
            color: rgba(255,255,255,.55);
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin: 5px 12px 12px;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 7px;
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
            transition: .2s;
        }

        .menu a:hover,
        .menu a.active {
            background: rgba(255,255,255,.16);
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
        }

        .admin-box {
            margin-top: 22px;
            background: rgba(255,255,255,.10);
            border-radius: 14px;
            padding: 13px;
            color: white;
        }

        .admin-name {
            font-size: 12px;
            font-weight: 700;
        }

        .admin-role {
            font-size: 11px;
            opacity: .65;
            margin-top: 3px;
        }

        .logout {
            width: 100%;
            margin-top: 12px;
            padding: 11px;
            border: 0;
            border-radius: 10px;
            background: rgba(255,255,255,.1);
            color: white;
            cursor: pointer;
            font-family: inherit;
        }

        .main {
            margin-left: 255px;
            min-height: 100vh;
            padding: 35px;
        }

        .top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .top h1 {
            font-family: 'Playfair Display', serif;
            font-size: 30px;
            color: #713B50;
        }

        .top p {
            margin-top: 5px;
            color: #8b727c;
            font-size: 14px;
        }

        .admin-pill {
            background: white;
            border: 1px solid #f0dce4;
            padding: 10px 16px;
            border-radius: 30px;
            color: #713B50;
            font-size: 13px;
            font-weight: 600;
        }

        .card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            max-width: 950px;
            box-shadow: 0 10px 30px rgba(113,59,80,.08);
            border: 1px solid #f3e4e9;
        }

        .card h2 {
            color: #713f55;
            font-family: 'Playfair Display', serif;
            font-size: 25px;
            margin-bottom: 7px;
        }

        .subtitle {
            color: #927d86;
            font-size: 13px;
            margin-bottom: 25px;
        }

        .info {
            background: #E1F0F6;
            border-left: 4px solid #7FAABD;
            padding: 14px 16px;
            border-radius: 10px;
            margin-bottom: 25px;
            color: #4b6874;
            font-size: 13px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .full {
            grid-column: 1 / -1;
        }

        .form-group {
            margin-bottom: 5px;
        }

        label {
            display: block;
            font-size: 13px;
            font-weight: 700;
            color: #713B50;
            margin-bottom: 8px;
        }

        select,
        input {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #ead9df;
            border-radius: 10px;
            background: #fffafb;
            color: #4F3740;
            font-family: inherit;
            outline: none;
        }

        select:focus,
        input:focus {
            border-color: #F28FA9;
            box-shadow: 0 0 0 3px rgba(242,143,169,.12);
        }

        .unit {
            position: relative;
        }

        .unit input {
            padding-right: 45px;
        }

        .unit span {
            position: absolute;
            right: 13px;
            top: 12px;
            color: #a38691;
            font-size: 13px;
        }

        .error {
            color: #c44d6d;
            font-size: 12px;
            margin-top: 5px;
        }

        .button-area {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #f1e3e7;
        }

        .btn {
            text-decoration: none;
            border: none;
            border-radius: 10px;
            padding: 12px 20px;
            font-family: inherit;
            font-weight: 700;
            cursor: pointer;
            font-size: 13px;
        }

        .btn-back {
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
                padding: 20px;
            }

            .grid {
                grid-template-columns: 1fr;
            }

            .full {
                grid-column: auto;
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

    <div class="menu-title">Menu Utama</div>

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

    <div class="sidebar-bottom">

        <div class="menu-title">Laporan</div>

        <nav class="menu">
            <a href="{{ route('laporan.index') }}">
                <span class="menu-icon">📊</span>
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

    <div class="top">

        <div>
            <h1>Data Ukuran</h1>
            <p>Sistem Informasi Jasa Jahit Celana & Dress Anak</p>
        </div>

        <div class="admin-pill">
            👩🏻‍💼 Admin Nays Tailor
        </div>

    </div>


    <div class="card">

        <h2>✏️ Edit Data Ukuran</h2>

        <p class="subtitle">
            Perbarui data ukuran sesuai dengan pesanan pelanggan.
        </p>


        <div class="info">
            💡 <strong>Pesanan:</strong>
            Pelanggan dan layanan mengikuti pesanan yang dipilih.
        </div>


        <form
            action="{{ route('ukuran.update', $ukuran->id) }}"
            method="POST"
        >

            @csrf
            @method('PUT')


            <div class="grid">

                <!-- PESANAN -->
                <div class="form-group full">

                    <label>Pesanan *</label>

                    <select name="pesanan_id" required>

                        <option value="">
                            -- Pilih Pesanan --
                        </option>

                        @foreach($pesanans as $pesanan)

                            <option
                                value="{{ $pesanan->id }}"
                                {{ $ukuran->pesanan_id == $pesanan->id ? 'selected' : '' }}
                            >

                                {{ $pesanan->kode_pesanan }}
                                —
                                {{ $pesanan->pelanggan->nama ?? 'Pelanggan' }}
                                —
                                {{ $pesanan->layanan->nama_layanan ?? 'Layanan' }}

                            </option>

                        @endforeach

                    </select>

                    @error('pesanan_id')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- LINGKAR DADA -->
                <div class="form-group">

                    <label>Lingkar Dada</label>

                    <div class="unit">

                        <input
                            type="number"
                            step="0.01"
                            name="lingkar_dada"
                            value="{{ old('lingkar_dada', $ukuran->lingkar_dada) }}"
                            placeholder="Contoh: 80"
                        >

                        <span>cm</span>

                    </div>

                </div>


                <!-- LINGKAR PINGGANG -->
                <div class="form-group">

                    <label>Lingkar Pinggang</label>

                    <div class="unit">

                        <input
                            type="number"
                            step="0.01"
                            name="lingkar_pinggang"
                            value="{{ old('lingkar_pinggang', $ukuran->lingkar_pinggang) }}"
                            placeholder="Contoh: 70"
                        >

                        <span>cm</span>

                    </div>

                </div>


                <!-- LINGKAR PINGGUL -->
                <div class="form-group">

                    <label>Lingkar Pinggul</label>

                    <div class="unit">

                        <input
                            type="number"
                            step="0.01"
                            name="lingkar_pinggul"
                            value="{{ old('lingkar_pinggul', $ukuran->lingkar_pinggul) }}"
                            placeholder="Contoh: 85"
                        >

                        <span>cm</span>

                    </div>

                </div>


                <!-- PANJANG BAJU -->
                <div class="form-group">

                    <label>Panjang Baju</label>

                    <div class="unit">

                        <input
                            type="number"
                            step="0.01"
                            name="panjang_baju"
                            value="{{ old('panjang_baju', $ukuran->panjang_baju) }}"
                            placeholder="Contoh: 60"
                        >

                        <span>cm</span>

                    </div>

                </div>


                <!-- PANJANG CELANA -->
                <div class="form-group">

                    <label>Panjang Celana</label>

                    <div class="unit">

                        <input
                            type="number"
                            step="0.01"
                            name="panjang_celana"
                            value="{{ old('panjang_celana', $ukuran->panjang_celana) }}"
                            placeholder="Contoh: 80"
                        >

                        <span>cm</span>

                    </div>

                </div>


                <!-- LINGKAR PAHA -->
                <div class="form-group">

                    <label>Lingkar Paha</label>

                    <div class="unit">

                        <input
                            type="number"
                            step="0.01"
                            name="lingkar_paha"
                            value="{{ old('lingkar_paha', $ukuran->lingkar_paha) }}"
                            placeholder="Contoh: 45"
                        >

                        <span>cm</span>

                    </div>

                </div>


                <!-- LINGKAR LENGAN -->
                <div class="form-group">

                    <label>Lingkar Lengan</label>

                    <div class="unit">

                        <input
                            type="number"
                            step="0.01"
                            name="lingkar_lengan"
                            value="{{ old('lingkar_lengan', $ukuran->lingkar_lengan) }}"
                            placeholder="Contoh: 30"
                        >

                        <span>cm</span>

                    </div>

                </div>

            </div>


            <div class="button-area">

                <a
                    href="{{ route('ukuran.index') }}"
                    class="btn btn-back"
                >
                    ← Kembali
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