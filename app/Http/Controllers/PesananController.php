<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Pelanggan;
use App\Models\Layanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $pesanans = Pesanan::with([
            'pelanggan',
            'layanan'
        ])
        ->latest()
        ->get();

        return view(
            'admin.pesanan.index',
            compact('pesanans')
        );
    }


    public function create()
    {
        $pelanggans = Pelanggan::orderBy('nama')->get();

        $layanans = Layanan::orderBy('nama_layanan')->get();

        return view(
            'admin.pesanan.create',
            compact('pelanggans', 'layanans')
        );
    }


    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'layanan_id' => 'required|exists:layanans,id',
            'tanggal_masuk' => 'required|date',
            'tanggal_selesai' => 'nullable|date',
            'dp' => 'required|numeric|min:0',
            'status' => 'required|string',
        ]);

        // Ambil harga dari layanan
        $layanan = Layanan::findOrFail(
            $request->layanan_id
        );

        $harga = $layanan->harga_mulai;

        Pesanan::create([
            'kode_pesanan' => 'ORD-' . date('YmdHis') . rand(10, 99),

            'pelanggan_id' => $request->pelanggan_id,

            'layanan_id' => $request->layanan_id,

            'tanggal_masuk' => $request->tanggal_masuk,

            'tanggal_selesai' => $request->tanggal_selesai,

            'harga' => $harga,

            'dp' => $request->dp,

            'status' => $request->status,
        ]);

        return redirect()
            ->route('pesanan.index')
            ->with(
                'success',
                'Pesanan berhasil ditambahkan.'
            );
    }


    public function show(Pesanan $pesanan)
    {
        $pesanan->load([
            'pelanggan',
            'layanan'
        ]);

        return view(
            'admin.pesanan.show',
            compact('pesanan')
        );
    }


    public function edit(Pesanan $pesanan)
    {
        $pelanggans = Pelanggan::orderBy('nama')->get();

        $layanans = Layanan::orderBy('nama_layanan')->get();

        return view(
            'admin.pesanan.edit',
            compact(
                'pesanan',
                'pelanggans',
                'layanans'
            )
        );
    }


    public function update(
        Request $request,
        Pesanan $pesanan
    ) {
        $request->validate([
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'layanan_id' => 'required|exists:layanans,id',
            'tanggal_masuk' => 'required|date',
            'tanggal_selesai' => 'nullable|date',
            'dp' => 'required|numeric|min:0',
            'status' => 'required|string',
        ]);

        // Ambil harga dari layanan
        $layanan = Layanan::findOrFail(
            $request->layanan_id
        );

        $harga = $layanan->harga_mulai;

        $pesanan->update([
            'pelanggan_id' => $request->pelanggan_id,

            'layanan_id' => $request->layanan_id,

            'tanggal_masuk' => $request->tanggal_masuk,

            'tanggal_selesai' => $request->tanggal_selesai,

            'harga' => $harga,

            'dp' => $request->dp,

            'status' => $request->status,
        ]);

        return redirect()
            ->route('pesanan.index')
            ->with(
                'success',
                'Pesanan berhasil diperbarui.'
            );
    }


    public function destroy(Pesanan $pesanan)
    {
        $pesanan->delete();

        return redirect()
            ->route('pesanan.index')
            ->with(
                'success',
                'Pesanan berhasil dihapus.'
            );
    }
}