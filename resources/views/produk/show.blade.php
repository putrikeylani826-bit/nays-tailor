<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Celana Anak - NAYS TAILOR</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: #fff8fb;
            color: #4b3440;
        }

        header {
            background: white;
            padding: 20px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 3px 18px rgba(111, 61, 85, .08);
        }

        .brand {
            font-family: 'Playfair Display', serif;
            font-size: 25px;
            font-weight: 700;
            color: #6f3d55;
        }

        a {
            color: #814761;
            text-decoration: none;
            font-weight: 600;
        }

        .container {
            max-width: 1100px;
            margin: 35px auto;
            padding: 0 20px;
        }

        .back {
            display: inline-block;
            margin-bottom: 20px;
        }

        .card {
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(111, 61, 85, .08);
        }

        /* AREA FOTO PRODUK */
        .product-image {
            min-height: 620px;
            background: #f8eaf0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
            overflow: hidden;
        }

        .product-image img {
            display: block;
            width: 100%;
            height: 570px;
            object-fit: contain;
            object-position: center;
        }

        .image-fallback {
            font-size: 100px;
        }

        /* FORM PEMESANAN */
        .content {
            padding: 32px 28px;
            min-width: 0;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            color: #6f3d55;
            font-size: 30px;
            line-height: 1.3;
            margin-bottom: 16px;
        }

        .description {
            color: #967383;
            line-height: 1.7;
            margin-bottom: 10px;
        }

        .price {
            color: #814761;
            font-size: 27px;
            font-weight: 700;
            margin: 18px 0 8px;
        }

        .stock {
            color: #548064;
            font-size: 13px;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 17px;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #6f3d55;
            font-size: 14px;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #ead7df;
            border-radius: 10px;
            background: #fffdfd;
            font-family: inherit;
            font-size: 14px;
            color: #4b3440;
        }

        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #814761;
            box-shadow: 0 0 0 3px rgba(129, 71, 97, .08);
        }

        textarea {
            resize: vertical;
        }

        .total {
            background: #fff0f5;
            padding: 16px;
            border-radius: 10px;
            margin: 20px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            font-weight: 700;
            color: #6f3d55;
        }

        .btn {
            display: block;
            width: 100%;
            border: none;
            border-radius: 11px;
            background: #814761;
            color: white;
            padding: 14px;
            font-family: inherit;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: .2s;
        }

        .btn:hover {
            background: #6f3d55;
        }

        .alert {
            background: #ffe5e9;
            color: #9b3f55;
            padding: 14px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .alert ul {
            padding-left: 20px;
            margin-top: 8px;
        }

        @media (max-width: 800px) {
            .container {
                margin-top: 20px;
            }

            .card {
                grid-template-columns: 1fr;
            }

            .product-image {
                min-height: 320px;
                padding: 20px;
            }

            .product-image img {
                height: 300px;
            }

            .content {
                padding: 25px 22px;
            }

            h1 {
                font-size: 26px;
            }
        }

        @media (max-width: 450px) {
            header {
                padding: 18px;
            }

            .brand {
                font-size: 21px;
            }

            .container {
                padding: 0 12px;
            }

            .content {
                padding: 22px 17px;
            }
        }
    </style>
</head>

<body>
<header>
    <div class="brand">NAYS TAILOR</div>
    <a href="{{ route('home') }}">Beranda</a>
</header>

<div class="container">
    <a href="{{ route('produk.index') }}" class="back">
        ← Kembali ke Produk
    </a>

    @if ($errors->any())
        <div class="alert">
            <strong>Periksa kembali data kamu:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">

       {{-- FOTO PRODUK --}}
<div class="product-image">
    <img
        src="{{ asset('Image/celana_anak.jpeg') }}"
        alt="{{ $produk->nama_produk }}"
    >
</div>

        {{-- DETAIL DAN FORM PEMESANAN --}}
        <div class="content">
            <h1>{{ $produk->nama_produk }}</h1>

            <p class="description">
                {{ $produk->deskripsi }}
            </p>

            <div
                class="price"
                id="hargaProduk"
                data-harga="{{ $produk->harga }}"
            >
                Rp{{ number_format($produk->harga, 0, ',', '.') }}
            </div>

            <div class="stock">
                Stok tersedia: {{ $produk->stok }}
            </div>

            @if ($produk->stok > 0)
                <form action="{{ route('pesanan-produk.store') }}" method="POST">
                    @csrf

                    <input
                        type="hidden"
                        name="produk_id"
                        value="{{ $produk->id }}"
                    >

                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Lengkap *</label>
                        <input
                            type="text"
                            id="nama_pelanggan"
                            name="nama_pelanggan"
                            value="{{ old('nama_pelanggan') }}"
                            maxlength="150"
                            required
                            placeholder="Masukkan nama lengkap"
                        >
                    </div>

                    <div class="form-group">
                        <label for="no_hp">Nomor HP/WhatsApp *</label>
                        <input
                            type="tel"
                            id="no_hp"
                            name="no_hp"
                            value="{{ old('no_hp') }}"
                            maxlength="20"
                            required
                            placeholder="Contoh: 08xxxxxxxxxx"
                        >
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat Lengkap *</label>
                        <textarea
                            id="alamat"
                            name="alamat"
                            rows="3"
                            required
                            placeholder="Masukkan alamat pengiriman"
                        >{{ old('alamat') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="ukuran">Pilih Ukuran *</label>
                        <select id="ukuran" name="ukuran" required>
                            <option value="">-- Pilih ukuran --</option>

                            @foreach (explode(',', $produk->ukuran) as $ukuran)
                                <option
                                    value="{{ trim($ukuran) }}"
                                    {{ old('ukuran') == trim($ukuran) ? 'selected' : '' }}
                                >
                                    {{ trim($ukuran) }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jumlah">Jumlah Barang *</label>
                        <input
                            type="number"
                            id="jumlah"
                            name="jumlah"
                            min="1"
                            max="{{ $produk->stok }}"
                            value="{{ old('jumlah', 1) }}"
                            required
                        >
                    </div>

                    <div class="total">
                        <span>Total Harga</span>
                        <span id="totalHarga">
                            Rp{{ number_format($produk->harga, 0, ',', '.') }}
                        </span>
                    </div>

                    <button type="submit" class="btn">
                        🛍️ Buat Pesanan
                    </button>
                </form>
            @else
                <p>Maaf, stok produk sedang habis.</p>
            @endif
        </div>
    </div>
</div>

<script>
    const hargaElement = document.getElementById('hargaProduk');
    const jumlahInput = document.getElementById('jumlah');
    const totalHarga = document.getElementById('totalHarga');

    const harga = Number(hargaElement.dataset.harga);

    function formatRupiah(angka) {
        return 'Rp' + angka.toLocaleString('id-ID');
    }

    if (jumlahInput && totalHarga) {
        function updateTotal() {
            let jumlah = Number(jumlahInput.value) || 1;

            const batasMaksimum = Number(jumlahInput.max);
            jumlah = Math.max(1, jumlah);

            if (batasMaksimum > 0) {
                jumlah = Math.min(jumlah, batasMaksimum);
            }

            totalHarga.textContent = formatRupiah(harga * jumlah);
        }

        jumlahInput.addEventListener('input', updateTotal);
        updateTotal();
    }
</script>

</body>
</html>
