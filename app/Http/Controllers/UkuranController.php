<?php

namespace App\Http\Controllers;

use App\Models\Ukuran;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class UkuranController extends Controller
{
    public function index()
    {
        $ukurans = Ukuran::with([
            'pesanan.pelanggan',
            'pesanan.layanan'
        ])
        ->latest()
        ->get();

        return view(
            'admin.ukuran.index',
            compact('ukurans')
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
            'admin.ukuran.create',
            compact('pesanans')
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'pesanan_id' => 'required|exists:pesanans,id',

            'lingkar_dada' => 'nullable|numeric',
            'lingkar_pinggang' => 'nullable|numeric',
            'lingkar_pinggul' => 'nullable|numeric',
            'panjang_baju' => 'nullable|numeric',
            'panjang_celana' => 'nullable|numeric',
            'lingkar_paha' => 'nullable|numeric',
            'lingkar_lengan' => 'nullable|numeric',
        ]);

        Ukuran::create([
            'pesanan_id' => $request->pesanan_id,
            'lingkar_dada' => $request->lingkar_dada,
            'lingkar_pinggang' => $request->lingkar_pinggang,
            'lingkar_pinggul' => $request->lingkar_pinggul,
            'panjang_baju' => $request->panjang_baju,
            'panjang_celana' => $request->panjang_celana,
            'lingkar_paha' => $request->lingkar_paha,
            'lingkar_lengan' => $request->lingkar_lengan,
        ]);

        return redirect()
            ->route('ukuran.index')
            ->with('success', 'Ukuran berhasil ditambahkan.');
    }

    public function show(Ukuran $ukuran)
    {
        $ukuran->load([
            'pesanan.pelanggan',
            'pesanan.layanan'
        ]);

        return view(
            'admin.ukuran.show',
            compact('ukuran')
        );
    }

    public function edit(Ukuran $ukuran)
    {
        $pesanans = Pesanan::with([
            'pelanggan',
            'layanan'
        ])
        ->latest()
        ->get();

        return view(
            'admin.ukuran.edit',
            compact(
                'ukuran',
                'pesanans'
            )
        );
    }

    public function update(Request $request, Ukuran $ukuran)
    {
        $request->validate([
            'pesanan_id' => 'required|exists:pesanans,id',

            'lingkar_dada' => 'nullable|numeric',
            'lingkar_pinggang' => 'nullable|numeric',
            'lingkar_pinggul' => 'nullable|numeric',
            'panjang_baju' => 'nullable|numeric',
            'panjang_celana' => 'nullable|numeric',
            'lingkar_paha' => 'nullable|numeric',
            'lingkar_lengan' => 'nullable|numeric',
        ]);

        $ukuran->update([
            'pesanan_id' => $request->pesanan_id,
            'lingkar_dada' => $request->lingkar_dada,
            'lingkar_pinggang' => $request->lingkar_pinggang,
            'lingkar_pinggul' => $request->lingkar_pinggul,
            'panjang_baju' => $request->panjang_baju,
            'panjang_celana' => $request->panjang_celana,
            'lingkar_paha' => $request->lingkar_paha,
            'lingkar_lengan' => $request->lingkar_lengan,
        ]);

        return redirect()
            ->route('ukuran.index')
            ->with('success', 'Ukuran berhasil diperbarui.');
    }

    public function destroy(Ukuran $ukuran)
    {
        $ukuran->delete();

        return redirect()
            ->route('ukuran.index')
            ->with('success', 'Ukuran berhasil dihapus.');
    }
}