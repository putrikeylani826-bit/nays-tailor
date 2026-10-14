<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title>Laporan NAYS TAILOR</title>

    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 11px;
            color: #333;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
            color: #6f3d55;
            font-size: 22px;
        }

        .header p {
            margin-top: 6px;
            color: #777;
        }

        .line {
            border-bottom: 2px solid #9c5c76;
            margin: 15px 0;
        }

        .info {
            width: 100%;
            margin-bottom: 20px;
        }

        .info td {
            width: 25%;
            text-align: center;
            padding: 10px;
            background: #f8eef2;
            border: 1px solid #ead5dd;
        }

        .number {
            font-size: 18px;
            font-weight: bold;
            color: #6f3d55;
        }

        .label {
            margin-top: 5px;
            color: #666;
        }

        h2 {
            color: #6f3d55;
            font-size: 15px;
            margin-bottom: 10px;
        }

        table.data {
            width: 100%;
            border-collapse: collapse;
        }

        table.data th {
            background: #6f3d55;
            color: white;
            padding: 8px;
            text-align: left;
        }

        table.data td {
            padding: 7px;
            border: 1px solid #ddd;
        }

        table.data tr:nth-child(even) {
            background: #faf5f7;
        }

        .footer {
            margin-top: 25px;
            text-align: right;
            font-size: 10px;
            color: #777;
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>NAYS TAILOR</h1>
        <p>Laporan Sistem Informasi Jasa Jahit</p>
    </div>

    <div class="line"></div>

    <table class="info">
        <tr>
            <td>
                <div class="number">{{ $totalPelanggan }}</div>
                <div class="label">Pelanggan</div>
            </td>

            <td>
                <div class="number">{{ $totalLayanan }}</div>
                <div class="label">Layanan</div>
            </td>

            <td>
                <div class="number">{{ $totalPesanan }}</div>
                <div class="label">Pesanan</div>
            </td>

            <td>
                <div class="number">
                    Rp {{ number_format($totalPembayaran, 0, ',', '.') }}
                </div>
                <div class="label">Pembayaran</div>
            </td>
        </tr>
    </table>

    <h2>Data Pesanan</h2>

    <table class="data">
        <thead>
            <tr>
                <th>No</th>
                <th>Pelanggan</th>
                <th>Layanan</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Total</th>
            </tr>
        </thead>

        <tbody>

            @forelse($pesanans as $pesanan)

                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td>
                        {{ $pesanan->pelanggan->nama ?? '-' }}
                    </td>

                    <td>
                        {{ $pesanan->layanan->nama_layanan ?? '-' }}
                    </td>

                    <td>
                        {{ $pesanan->created_at
                            ? $pesanan->created_at->format('d-m-Y')
                            : '-' }}
                    </td>

                    <td>
                        {{ $pesanan->status ?? '-' }}
                    </td>

                    <td>
                        Rp {{ number_format($pesanan->total ?? 0, 0, ',', '.') }}
                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="6" style="text-align:center;">
                        Belum ada data pesanan.
                    </td>
                </tr>

            @endforelse

        </tbody>
    </table>

    <div class="footer">
        Dicetak dari Sistem Informasi NAYS TAILOR
    </div>

</body>
</html>