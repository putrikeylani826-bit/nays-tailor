<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Ukuran - Nays Tailor</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'DM Sans', sans-serif;
            background: #fff8fb;
            color: #4b3440;
        }

        .container {
            padding: 40px;
            max-width: 1100px;
            margin: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        h1 {
            margin: 0;
            font-family: 'Playfair Display', serif;
            color: #6f3d55;
            font-size: 32px;
        }

        .subtitle {
            margin-top: 7px;
            color: #967383;
        }

        .button-group {
            display: flex;
            gap: 10px;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            border: none;
            cursor: pointer;
            font-family: inherit;
            font-size: 14px;
        }

        .btn-back {
            background: #ead7df;
            color: #6f3d55;
        }

        .btn-save {
            background: #814761;
            color: white;
        }

        .btn-save:hover {
            background: #6f3d55;
        }

        .card {
            background: white;
            border-radius: 18px;
            padding: 30px;
            box-shadow: 0 8px 30px rgba(111, 61, 85, .08);
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            color: #6f3d55;
            font-size: 21px;
            margin: 0 0 22px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #6f3d55;
        }

        input, select {
            width: 100%;
            padding: 13px 15px;
            border: 1px solid #ead7df;
            border-radius: 10px;
            font-family: inherit;
            font-size: 14px;
            color: #4b3440;
            background: #fffdfd;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #814761;
            box-shadow: 0 0 0 3px rgba(129, 71, 97, .10);
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0 20px;
        }

        .unit {
            color: #967383;
            font-size: 12px;
            margin-top: 6px;
        }

        .error {
            color: #b42345;
            font-size: 13px;
            margin-top: 6px;
        }

        .alert {
            padding: 14px 18px;
            border-radius: 10px;
            margin-bottom: 20px;
            background: #ffe5e9;
            color: #9b3f55;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 10px;
        }

        @media (max-width: 650px) {
            .container {
                padding: 20px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .card {
                padding: 20px;
            }

            h1 {
                font-size: 26px;
            }
        }
    </style>
</head>

<body>
<div class="container">

    <div class="header">
        <div>
            <h1>📏 Tambah Data Ukuran</h1>
            <div class="subtitle">
                Masukkan ukuran sesuai pesanan pelanggan.
            </div>
        </div>

        <div class="button-group">
            <a href="{{ route('ukuran.index') }}" class="btn btn-back">
                ← Kembali
            </a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert">
            <strong>Periksa kembali data berikut:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <h2 class="section-title">Informasi Pengukuran</h2>

        <form action="{{ route('ukuran.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="pesanan_id">Pilih Pesanan *</label>

                <select name="pesanan_id" id="pesanan_id" required>
                    <option value="">-- Pilih pesanan pelanggan --</option>

                    @foreach ($pesanans as $pesanan)
                        <option
                            value="{{ $pesanan->id }}"
                            {{ old('pesanan_id') == $pesanan->id ? 'selected' : '' }}
                        >
                            {{ $pesanan->kode_pesanan }}
                            — {{ $pesanan->pelanggan->nama ?? 'Pelanggan' }}
                            — {{ $pesanan->layanan->nama_layanan ?? 'Layanan' }}
                        </option>
                    @endforeach
                </select>

                @error('pesanan_id')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-grid">
                <div class="form-group">
                    <label for="lingkar_dada">Lingkar Dada</label>
                    <input type="number" step="0.01" min="0"
                        name="lingkar_dada" id="lingkar_dada"
                        value="{{ old('lingkar_dada') }}"
                        placeholder="Contoh: 60">
                    <div class="unit">Satuan: cm</div>
                </div>

                <div class="form-group">
                    <label for="lingkar_pinggang">Lingkar Pinggang</label>
                    <input type="number" step="0.01" min="0"
                        name="lingkar_pinggang" id="lingkar_pinggang"
                        value="{{ old('lingkar_pinggang') }}"
                        placeholder="Contoh: 50">
                    <div class="unit">Satuan: cm</div>
                </div>

                <div class="form-group">
                    <label for="lingkar_pinggul">Lingkar Pinggul</label>
                    <input type="number" step="0.01" min="0"
                        name="lingkar_pinggul" id="lingkar_pinggul"
                        value="{{ old('lingkar_pinggul') }}"
                        placeholder="Contoh: 65">
                    <div class="unit">Satuan: cm</div>
                </div>

                <div class="form-group">
                    <label for="panjang_baju">Panjang Baju</label>
                    <input type="number" step="0.01" min="0"
                        name="panjang_baju" id="panjang_baju"
                        value="{{ old('panjang_baju') }}"
                        placeholder="Contoh: 45">
                    <div class="unit">Satuan: cm</div>
                </div>

                <div class="form-group">
                    <label for="panjang_celana">Panjang Celana</label>
                    <input type="number" step="0.01" min="0"
                        name="panjang_celana" id="panjang_celana"
                        value="{{ old('panjang_celana') }}"
                        placeholder="Contoh: 55">
                    <div class="unit">Satuan: cm</div>
                </div>

                <div class="form-group">
                    <label for="lingkar_paha">Lingkar Paha</label>
                    <input type="number" step="0.01" min="0"
                        name="lingkar_paha" id="lingkar_paha"
                        value="{{ old('lingkar_paha') }}"
                        placeholder="Contoh: 35">
                    <div class="unit">Satuan: cm</div>
                </div>

                <div class="form-group">
                    <label for="lingkar_lengan">Lingkar Lengan</label>
                    <input type="number" step="0.01" min="0"
                        name="lingkar_lengan" id="lingkar_lengan"
                        value="{{ old('lingkar_lengan') }}"
                        placeholder="Contoh: 25">
                    <div class="unit">Satuan: cm</div>
                </div>
            </div>

            <div class="form-actions">
                <a href="{{ route('ukuran.index') }}" class="btn btn-back">
                    Batal
                </a>

                <button type="submit" class="btn btn-save">
                    💾 Simpan Ukuran
                </button>
            </div>
        </form>
    </div>

</div>
</body>
</html>