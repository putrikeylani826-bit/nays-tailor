<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayarans = Pembayaran::with([
            'pesanan.pelanggan',
            'pesanan.layanan'
        ])
        ->latest()
        ->get();

        return view(
            'admin.pembayaran.index',
            compact('pembayarans')
        );
    }

    public function create()
    {
        $pesanans = Pesanan::with([
            'pelanggan',
            'layanan'
        ])
        ->latest()
        ->get();

        return view(
            'admin.pembayaran.create',
            compact('pesanans')
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'pesanan_id' => 'required|exists:pesanans,id',
            'tanggal_bayar' => 'required|date',
            'jumlah' => 'required|numeric|min:0',
            'metode' => 'required|string',
            'keterangan' => 'nullable|string',
        ]);

        Pembayaran::create([
            'pesanan_id' => $request->pesanan_id,
            'tanggal_bayar' => $request->tanggal_bayar,
            'jumlah' => $request->jumlah,
            'metode' => $request->metode,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()
            ->route('pembayaran.index')
            ->with(
                'success',
                'Pembayaran berhasil ditambahkan.'
            );
    }

    public function show(Pembayaran $pembayaran)
    {
        $pembayaran->load([
            'pesanan.pelanggan',
            'pesanan.layanan'
        ]);

        return view(
            'admin.pembayaran.show',
            compact('pembayaran')
        );
    }

    public function edit(Pembayaran $pembayaran)
    {
        $pesanans = Pesanan::with([
            'pelanggan',
            'layanan'
        ])
        ->latest()
        ->get();

        return view(
            'admin.pembayaran.edit',
            compact(
                'pembayaran',
                'pesanans'
            )
        );
    }

    public function update(
        Request $request,
        Pembayaran $pembayaran
    ) {
        $request->validate([
            'pesanan_id' => 'required|exists:pesanans,id',
            'tanggal_bayar' => 'required|date',
            'jumlah' => 'required|numeric|min:0',
            'metode' => 'required|string',
            'keterangan' => 'nullable|string',
        ]);

        $pembayaran->update([
            'pesanan_id' => $request->pesanan_id,
            'tanggal_bayar' => $request->tanggal_bayar,
            'jumlah' => $request->jumlah,
            'metode' => $request->metode,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()
            ->route('pembayaran.index')
            ->with(
                'success',
                'Pembayaran berhasil diperbarui.'
            );
    }

    public function destroy(Pembayaran $pembayaran)
    {
        $pembayaran->delete();

        return redirect()
            ->route('pembayaran.index')
            ->with(
                'success',
                'Pembayaran berhasil dihapus.'
            );
    }
}