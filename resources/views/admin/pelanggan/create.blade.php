<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Pelanggan - Nays Tailor</title>

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
            max-width: 850px;
            margin: 0 auto;
            padding: 40px 25px;
        }

        .back {
            display: inline-block;
            color: #814761;
            text-decoration: none;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .card {
            background: white;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(111, 61, 85, .08);
        }

        h1 {
            margin: 0 0 8px;
            font-family: 'Playfair Display', serif;
            color: #6f3d55;
            font-size: 32px;
        }

        .subtitle {
            color: #967383;
            margin-bottom: 30px;
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

        input,
        textarea {
            width: 100%;
            padding: 13px 15px;
            border: 1px solid #e6d4dc;
            border-radius: 10px;
            font-family: 'DM Sans', sans-serif;
            font-size: 15px;
            outline: none;
        }

        input:focus,
        textarea:focus {
            border-color: #9c5c76;
            box-shadow: 0 0 0 3px rgba(156, 92, 118, .1);
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        .error {
            color: #c04b62;
            font-size: 13px;
            margin-top: 5px;
        }

        .buttons {
            display: flex;
            gap: 12px;
            margin-top: 30px;
        }

        .btn {
            border: none;
            padding: 12px 22px;
            border-radius: 10px;
            font-family: 'DM Sans', sans-serif;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-save {
            background: #814761;
            color: white;
        }

        .btn-save:hover {
            background: #6f3d55;
        }

        .btn-back {
            background: #f1e3e9;
            color: #6f3d55;
        }
    </style>
</head>

<body>

<div class="container">

    <a href="{{ route('pelanggan.index') }}" class="back">
        ← Kembali ke Data Pelanggan
    </a>

    <div class="card">

        <h1>Tambah Pelanggan</h1>

        <div class="subtitle">
            Masukkan data pelanggan Nays Tailor
        </div>

        <form action="{{ route('pelanggan.store') }}" method="POST">

            @csrf

            <div class="form-group">
                <label for="nama">Nama Pelanggan</label>

                <input
                    type="text"
                    id="nama"
                    name="nama"
                    value="{{ old('nama') }}"
                    placeholder="Masukkan nama pelanggan"
                    required
                >

                @error('nama')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="no_hp">No. HP</label>

                <input
                    type="text"
                    id="no_hp"
                    name="no_hp"
                    value="{{ old('no_hp') }}"
                    placeholder="Contoh: 081234567890"
                    required
                >

                @error('no_hp')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>

                <textarea
                    id="alamat"
                    name="alamat"
                    placeholder="Masukkan alamat pelanggan"
                >{{ old('alamat') }}</textarea>

                @error('alamat')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>


            <div class="buttons">

                <button type="submit" class="btn btn-save">
                    💾 Simpan Pelanggan
                </button>

                <a href="{{ route('pelanggan.index') }}" class="btn btn-back">
                    Batal
                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>