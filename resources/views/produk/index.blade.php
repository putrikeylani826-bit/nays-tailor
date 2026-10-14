
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Celana Anak - Nays Tailor</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: 'DM Sans', sans-serif;
            background: #fff8fb;
            color: #4b3440;
        }

        header {
            background: white;
            padding: 22px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 3px 18px #6f3d5510;
        }

        .brand {
            color: #6f3d55;
            font-family: 'Playfair Display', serif;
            font-size: 25px;
            font-weight: 700;
        }

        header a {
            color: #814761;
            text-decoration: none;
            font-weight: 600;
        }

        main { padding: 45px 7%; }

        h1 {
            font-family: 'Playfair Display', serif;
            color: #6f3d55;
            font-size: 34px;
            margin-bottom: 8px;
        }

        .subtitle { color: #967383; margin-bottom: 30px; }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 300px));
            gap: 25px;
        }

        .card {
            background: white;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 30px #6f3d5510;
        }

       .product-photo {
    display: block;
    width: 100%;
    height: 198px;
    object-fit: contain;
    object-position: center;
}
        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .content { padding: 22px; }

        h2 {
            color: #6f3d55;
            font-size: 20px;
            margin: 0 0 10px;
        }

        .price {
            color: #814761;
            font-size: 21px;
            font-weight: 700;
            margin: 15px 0 8px;
        }

        .sizes, .stock {
            color: #967383;
            font-size: 13px;
            margin: 7px 0;
        }

        .btn {
            display: block;
            text-align: center;
            background: #814761;
            color: white;
            text-decoration: none;
            padding: 12px;
            border-radius: 10px;
            margin-top: 18px;
            font-weight: 700;
        }

        .btn:hover { background: #6f3d55; }

        .empty {
            background: white;
            border-radius: 15px;
            padding: 30px;
        }

        .back-dashboard {
    max-width: 1160px;
    margin: 22px auto 0;
    padding: 0 20px;
}

.back-dashboard a {
    display: inline-block;
    padding: 11px 18px;
    background: #814761;
    color: #ffffff;
    border-radius: 10px;
    font-size: 13px;
    text-decoration: none;
    transition: .2s ease;
}

.back-dashboard a:hover {
    background: #6f3d55;
    transform: translateY(-2px);
}
    </style>
</head>
<body>

<header>
    <div class="brand">NAYS TAILOR</div>
    <a href="{{ route('home') }}">← Beranda</a>
</header>

<div class="back-dashboard">
    <a href="{{ route('dashboard') }}">
        ← Kembali ke Dashboard
    </a>
</div>

<main>
    <h1>Celana Anak Siap Pakai</h1>
    <p class="subtitle">
        Pilih celana favorit si kecil tanpa perlu custom.
    </p>

    @if($produks->isEmpty())
        <div class="empty">Belum ada produk yang tersedia.</div>
    @else
        <div class="grid">
            @foreach($produks as $produk)
                <article class="card">
                    <div class="product-image">
                         <img
        src="{{ asset('Image/celana_anak.jpeg') }}"
        alt="{{ $produk->nama_produk }}"
        class="product-photo"
    >
                    </div>

                    <div class="content">
                        <h2>{{ $produk->nama_produk }}</h2>

                        <p>{{ $produk->deskripsi }}</p>

                        <div class="price">
                            Rp{{ number_format($produk->harga, 0, ',', '.') }}
                        </div>

                        <div class="sizes">
                            Ukuran: {{ $produk->ukuran }}
                        </div>

                        <div class="stock">
                            Stok tersedia: {{ $produk->stok }}
                        </div>

                        <a
                            href="{{ route('produk.show', $produk->id) }}"
                            class="btn">
                            Pesan Sekarang
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    @endif
</main>

</body>
</html>
