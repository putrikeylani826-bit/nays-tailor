
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Berhasil - Nays Tailor</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            padding: 25px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff8fb;
            color: #4b3440;
            font-family: 'DM Sans', sans-serif;
        }
        .card {
            width: 100%;
            max-width: 520px;
            padding: 35px;
            text-align: center;
            background: white;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(111, 61, 85, .08);
        }
        .icon { font-size: 55px; }
        h1 {
            font-family: 'Playfair Display', serif;
            color: #6f3d55;
        }
        .code {
            padding: 14px;
            border-radius: 10px;
            background: #fff0f5;
            color: #814761;
            font-weight: 700;
            overflow-wrap: anywhere;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 13px 20px;
            border-radius: 10px;
            background: #814761;
            color: white;
            text-decoration: none;
            font-weight: 700;
        }
        .muted { color: #967383; line-height: 1.7; }
    </style>
</head>
<body>
    <div class="card">
        <div class="icon">🎉</div>
        <h1>Pesanan Berhasil!</h1>
        <p class="muted">
            Terima kasih sudah memesan produk Nays Tailor.
            Pesanan kamu tersimpan dan menunggu konfirmasi admin.
        </p>

        <p>Kode pesanan:</p>
        <div class="code">{{ $pesanan->kode_pesanan }}</div>

        <p><strong>{{ $pesanan->produk->nama_produk }}</strong></p>
        <p>Ukuran: {{ $pesanan->ukuran }}</p>
        <p>Jumlah: {{ $pesanan->jumlah }}</p>
        <p>Total:
            <strong>
                Rp{{ number_format($pesanan->total_harga, 0, ',', '.') }}
            </strong>
        </p>
        <p>Status: {{ $pesanan->status }}</p>

        <a href="{{ route('produk.index') }}" class="btn">
            Kembali ke Produk
        </a>
    </div>
</body>
</html>
