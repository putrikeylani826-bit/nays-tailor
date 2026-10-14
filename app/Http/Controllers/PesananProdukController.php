<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\PesananProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class PesananProdukController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'produk_id' => 'required|exists:produks,id',
            'nama_pelanggan' => 'required|string|max:150',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'required|string',
            'ukuran' => 'required|string|max:50',
            'jumlah' => 'required|integer|min:1',
        ]);

        $pesanan = DB::transaction(function () use ($data) {
            $produk = Produk::where('id', $data['produk_id'])
                ->lockForUpdate()
                ->firstOrFail();

            $ukuranTersedia = array_map(
                'trim',
                explode(',', $produk->ukuran)
            );

            if (!in_array($data['ukuran'], $ukuranTersedia, true)) {
                throw ValidationException::withMessages([
                    'ukuran' => 'Ukuran yang dipilih tidak tersedia.',
                ]);
            }

            if ($produk->stok < $data['jumlah']) {
                throw ValidationException::withMessages([
                    'jumlah' => 'Stok tidak mencukupi. Stok tersedia: '
                        . $produk->stok,
                ]);
            }

            $harga = (float) $produk->harga;
            $total = $harga * $data['jumlah'];

            $pesanan = PesananProduk::create([
                'kode_pesanan' => 'PRD-' . now()->format('YmdHis')
                    . '-' . Str::upper(Str::random(4)),
                'produk_id' => $produk->id,
                'nama_pelanggan' => $data['nama_pelanggan'],
                'no_hp' => $data['no_hp'],
                'alamat' => $data['alamat'],
                'ukuran' => $data['ukuran'],
                'jumlah' => $data['jumlah'],
                'harga_satuan' => $harga,
                'total_harga' => $total,
                'status' => 'Menunggu',
            ]);

            $produk->decrement('stok', $data['jumlah']);

            return $pesanan;
        });

        return redirect()
            ->route('pesanan-produk.sukses', $pesanan->id);
    }

    public function sukses(PesananProduk $pesananProduk)
    {
        $pesananProduk->load('produk');

        return view(
            'produk.sukses',
            ['pesanan' => $pesananProduk]
        );
    }
}