<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Layanan;
use App\Models\Pesanan;
use App\Models\Pembayaran;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    /**
     * Menampilkan halaman laporan
     */
    public function index()
    {
        // Total pelanggan
        $totalPelanggan = Pelanggan::count();

        // Total layanan
        $totalLayanan = Layanan::count();

        // Total pesanan
        $totalPesanan = Pesanan::count();

        // Total pembayaran
        $totalPembayaran = Pembayaran::sum('jumlah');

        // Mengambil semua data pesanan
        $pesanans = Pesanan::with([
            'pelanggan',
            'layanan'
        ])
        ->latest()
        ->get();

        return view('admin.laporan.index', compact(
            'totalPelanggan',
            'totalLayanan',
            'totalPesanan',
            'totalPembayaran',
            'pesanans'
        ));
    }

    /**
     * Export laporan ke PDF
     */
    public function pdf()
    {
        // Total pelanggan
        $totalPelanggan = Pelanggan::count();

        // Total layanan
        $totalLayanan = Layanan::count();

        // Total pesanan
        $totalPesanan = Pesanan::count();

        // Total pembayaran
        $totalPembayaran = Pembayaran::sum('jumlah');

        // Mengambil data pesanan
        $pesanans = Pesanan::with([
            'pelanggan',
            'layanan'
        ])
        ->latest()
        ->get();

        // Membuat PDF dari view
        $pdf = Pdf::loadView('admin.laporan.pdf', compact(
            'totalPelanggan',
            'totalLayanan',
            'totalPesanan',
            'totalPembayaran',
            'pesanans'
        ));

        // Ukuran kertas A4 portrait
        $pdf->setPaper('A4', 'portrait');

        // Download PDF
        return $pdf->download('Laporan-Nays-Tailor.pdf');
    }
}