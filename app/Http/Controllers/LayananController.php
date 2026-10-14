<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Menampilkan semua data layanan
     */
    public function index()
    {
        $layanans = Layanan::latest()->get();

        return view('admin.layanan.index', compact('layanans'));
    }

    /**
     * Menampilkan form tambah layanan
     */
    public function create()
    {
        return view('admin.layanan.create');
    }

    /**
     * Menyimpan layanan baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga_mulai' => 'required|numeric',
            'gambar' => 'nullable|string|max:255',
        ]);

        Layanan::create([
            'nama_layanan' => $request->nama_layanan,
            'deskripsi' => $request->deskripsi,
            'harga_mulai' => $request->harga_mulai,
            'gambar' => $request->gambar,
        ]);

        return redirect()
            ->route('layanan.index')
            ->with('success', 'Layanan berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail layanan
     */
    public function show(Layanan $layanan)
    {
        return view('admin.layanan.show', compact('layanan'));
    }

    /**
     * Menampilkan form edit layanan
     */
    public function edit(Layanan $layanan)
    {
        return view('admin.layanan.edit', compact('layanan'));
    }

    /**
     * Memperbarui layanan
     */
    public function update(Request $request, Layanan $layanan)
    {
        $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga_mulai' => 'required|numeric',
            'gambar' => 'nullable|string|max:255',
        ]);

        $layanan->update([
            'nama_layanan' => $request->nama_layanan,
            'deskripsi' => $request->deskripsi,
            'harga_mulai' => $request->harga_mulai,
            'gambar' => $request->gambar,
        ]);

        return redirect()
            ->route('layanan.index')
            ->with('success', 'Layanan berhasil diperbarui.');
    }

    /**
     * Menghapus layanan
     */
    public function destroy(Layanan $layanan)
    {
        $layanan->delete();

        return redirect()
            ->route('layanan.index')
            ->with('success', 'Layanan berhasil dihapus.');
    }
}