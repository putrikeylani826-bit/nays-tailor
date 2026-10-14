<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Pelanggan - NAYS TAILOR</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: #fff4f7;
            color: #4f3740;
            min-height: 100vh;
        }

        /* ================= SIDEBAR ================= */

        .sidebar {
            width: 255px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;

            background: linear-gradient(
                180deg,
                #713b50 0%,
                #814761 55%,
                #9c5c76 100%
            );

            padding: 28px 18px;
            overflow-y: auto;

            box-shadow: 5px 0 25px rgba(111, 61, 85, .15);
        }

        .brand {
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }

        .brand h1 {
            font-family: 'Playfair Display', serif;
            font-size: 27px;
            letter-spacing: 2px;
        }

        .brand p {
            font-size: 11px;
            margin-top: 5px;
            opacity: .8;
            letter-spacing: 1px;
        }

        .menu-title {
            color: rgba(255,255,255,.6);
            font-size: 11px;
            margin: 20px 12px 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .menu-item {
            display: flex;
            align-items: center;
            gap: 12px;

            text-decoration: none;
            color: rgba(255,255,255,.85);

            padding: 12px 14px;
            margin-bottom: 5px;

            border-radius: 12px;

            font-size: 14px;
            transition: .2s;
        }

        .menu-item:hover {
            background: rgba(255,255,255,.12);
            color: white;
            transform: translateX(3px);
        }

        .menu-item.active {
            background: #f28fa9;
            color: white;
            box-shadow: 0 7px 18px rgba(242,143,169,.3);
        }

        .menu-icon {
            width: 22px;
            text-align: center;
            font-size: 17px;
        }

        .logout {
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,.15);
        }

        .logout button {
            width: 100%;
            border: none;
            background: rgba(255,255,255,.1);
            color: white;
            padding: 12px;
            border-radius: 12px;
            cursor: pointer;
            font-family: inherit;
            font-size: 14px;
        }

        .logout button:hover {
            background: rgba(255,255,255,.18);
        }

        /* ================= MAIN ================= */

        .main-content {
            margin-left: 255px;
            min-height: 100vh;
            padding: 35px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .page-title h2 {
            font-family: 'Playfair Display', serif;
            font-size: 30px;
            color: #713b50;
        }

        .page-title p {
            margin-top: 5px;
            color: #8f737e;
            font-size: 14px;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            text-decoration: none;

            padding: 11px 18px;

            background: #e1f0f6;
            color: #527d91;

            border-radius: 12px;

            font-size: 14px;
            font-weight: 600;

            transition: .2s;
        }

        .back-button:hover {
            background: #a9c7d8;
            color: white;
            transform: translateY(-2px);
        }

        /* ================= FORM CARD ================= */

        .form-card {
            max-width: 850px;
            background: white;

            border: 1px solid #f2dfe5;
            border-radius: 22px;

            padding: 32px;

            box-shadow: 0 12px 35px rgba(111,61,85,.08);
        }

        .form-header {
            display: flex;
            align-items: center;
            gap: 15px;

            margin-bottom: 28px;
            padding-bottom: 20px;

            border-bottom: 1px solid #f3e3e8;
        }

        .form-icon {
            width: 55px;
            height: 55px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #ffe1e9;
            color: #b64e6b;

            border-radius: 16px;

            font-size: 25px;
        }

        .form-header h3 {
            font-family: 'Playfair Display', serif;
            color: #713b50;
            font-size: 22px;
        }

        .form-header p {
            color: #9b808a;
            font-size: 13px;
            margin-top: 3px;
        }

        /* ================= FORM ================= */

        .form-group {
            margin-bottom: 22px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;

            font-size: 14px;
            font-weight: 600;

            color: #713b50;
        }

        .required {
            color: #e97895;
        }

        .form-control {
            width: 100%;

            padding: 13px 15px;

            border: 1px solid #ead7df;
            border-radius: 12px;

            background: #fffafb;

            font-family: 'DM Sans', sans-serif;
            font-size: 14px;

            color: #4f3740;

            outline: none;

            transition: .2s;
        }

        .form-control:focus {
            border-color: #f28fa9;

            box-shadow:
                0 0 0 3px rgba(242,143,169,.12);

            background: white;
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .error {
            margin-top: 6px;
            color: #c85a73;
            font-size: 12px;
        }

        /* ================= BUTTON ================= */

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 12px;

            margin-top: 30px;
            padding-top: 22px;

            border-top: 1px solid #f3e3e8;
        }

        .btn {
            border: none;
            border-radius: 12px;

            padding: 12px 22px;

            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            font-weight: 600;

            text-decoration: none;
            cursor: pointer;

            transition: .2s;
        }

        .btn-cancel {
            background: #f0dce4;
            color: #713b50;
        }

        .btn-cancel:hover {
            background: #e5cbd5;
        }

        .btn-save {
            background: #f28fa9;
            color: white;

            box-shadow: 0 7px 18px rgba(242,143,169,.25);
        }

        .btn-save:hover {
            background: #e97895;
            transform: translateY(-2px);
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 800px) {

            .sidebar {
                width: 210px;
            }

            .main-content {
                margin-left: 210px;
                padding: 25px;
            }
        }

        @media (max-width: 650px) {

            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .main-content {
                margin-left: 0;
                padding: 20px;
            }

            .topbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .form-actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <!-- ================= SIDEBAR ================= -->

    <aside class="sidebar">

        <div class="brand">
            <h1>NAYS TAILOR</h1>
            <p>SISTEM INFORMASI JASA JAHIT</p>
        </div>

        <div class="menu-title">
            Menu Utama
        </div>

        <a href="{{ route('dashboard') }}" class="menu-item">
            <span class="menu-icon">🏠</span>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('pelanggan.index') }}" class="menu-item active">
            <span class="menu-icon">👥</span>
            <span>Pelanggan</span>
        </a>

        <a href="{{ route('layanan.index') }}" class="menu-item">
            <span class="menu-icon">✂️</span>
            <span>Layanan</span>
        </a>

        <a href="{{ route('pesanan.index') }}" class="menu-item">
            <span class="menu-icon">🧵</span>
            <span>Pesanan</span>
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

        <div class="logout">

            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit">
                    🚪 &nbsp; Keluar
                </button>
            </form>

        </div>

    </aside>


    <!-- ================= MAIN CONTENT ================= -->

    <main class="main-content">

        <div class="topbar">

            <div class="page-title">

                <h2>Edit Pelanggan</h2>

                <p>
                    Perbarui informasi pelanggan NAYS TAILOR
                </p>

            </div>

            <a href="{{ route('pelanggan.index') }}" class="back-button">
                ← Kembali
            </a>

        </div>


        <!-- ================= FORM ================= -->

        <div class="form-card">

            <div class="form-header">

                <div class="form-icon">
                    👤
                </div>

                <div>
                    <h3>Informasi Pelanggan</h3>

                    <p>
                        Silakan perbarui data pelanggan di bawah ini.
                    </p>
                </div>

            </div>


            <form
                action="{{ route('pelanggan.update', $pelanggan->id) }}"
                method="POST"
            >

                @csrf

                @method('PUT')


                <!-- NAMA -->

                <div class="form-group">

                    <label for="nama">
                        Nama Pelanggan
                        <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        class="form-control"
                        value="{{ old('nama', $pelanggan->nama) }}"
                        placeholder="Masukkan nama pelanggan"
                        required
                    >

                    @error('nama')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- NO HP -->

                <div class="form-group">

                    <label for="no_hp">
                        Nomor HP
                        <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        id="no_hp"
                        name="no_hp"
                        class="form-control"
                        value="{{ old('no_hp', $pelanggan->no_hp) }}"
                        placeholder="Contoh: 08567892340"
                        required
                    >

                    @error('no_hp')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- ALAMAT -->

                <div class="form-group">

                    <label for="alamat">
                        Alamat
                    </label>

                    <textarea
                        id="alamat"
                        name="alamat"
                        class="form-control"
                        placeholder="Masukkan alamat pelanggan"
                    >{{ old('alamat', $pelanggan->alamat) }}</textarea>

                    @error('alamat')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- BUTTON -->

                <div class="form-actions">

                    <a
                        href="{{ route('pelanggan.index') }}"
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