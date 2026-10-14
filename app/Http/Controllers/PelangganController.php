<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Menampilkan semua data pelanggan
     */
    public function index()
    {
        $pelanggans = Pelanggan::latest()->get();

        return view('admin.pelanggan.index', compact('pelanggans'));
    }

    /**
     * Menampilkan form tambah pelanggan
     */
    public function create()
    {
        return view('admin.pelanggan.create');
    }

    /**
     * Menyimpan pelanggan baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'nullable|string',
        ]);

        Pelanggan::create([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect()
            ->route('pelanggan.index')
            ->with('success', 'Data pelanggan berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail pelanggan
     */
    public function show(Pelanggan $pelanggan)
    {
        return view('admin.pelanggan.show', compact('pelanggan'));
    }

    /**
     * Menampilkan form edit pelanggan
     */
    public function edit(Pelanggan $pelanggan)
    {
        return view('admin.pelanggan.edit', compact('pelanggan'));
    }

    /**
     * Memperbarui data pelanggan
     */
    public function update(Request $request, Pelanggan $pelanggan)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'nullable|string',
        ]);

        $pelanggan->update([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect()
            ->route('pelanggan.index')
            ->with('success', 'Data pelanggan berhasil diperbarui.');
    }

    /**
     * Menghapus pelanggan
     */
    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete();

        return redirect()
            ->route('pelanggan.index')
            ->with('success', 'Data pelanggan berhasil dihapus.');
    }
}