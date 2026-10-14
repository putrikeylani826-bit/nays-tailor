<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // DATA PELANGGAN DAN LAYANAN JAHIT
        $totalPelanggan = DB::table('pelanggans')->count();
        $totalLayanan = DB::table('layanans')->count();

        // DATA PESANAN JAHIT CUSTOM
        $jumlahPesanan = DB::table('pesanans')->count();

        $pesananMenunggu = DB::table('pesanans')
            ->where('status', 'Menunggu')
            ->count();

        $pesananDiproses = DB::table('pesanans')
            ->where('status', 'Diproses')
            ->count();

        $pesananSelesai = DB::table('pesanans')
            ->where('status', 'Selesai')
            ->count();

        // PENDAPATAN JAHIT
        $totalPendapatan = DB::table('pembayarans')
            ->sum('jumlah');

        // PESANAN JAHIT TERBARU
        $pesananTerbaru = Pesanan::with([
            'pelanggan',
            'layanan'
        ])
            ->latest()
            ->take(5)
            ->get();

        // DATA PRODUK JADI
        $totalProduk = DB::table('produks')->count();

        $stokProduk = DB::table('produks')
            ->sum('stok');

        // DATA PESANAN PRODUK JADI
        $jumlahPesananProduk = DB::table('pesanan_produks')
            ->count();

        $pesananProdukMenunggu = DB::table('pesanan_produks')
            ->where('status', 'Menunggu')
            ->count();

        $pesananProdukTerbaru = DB::table('pesanan_produks')
            ->join(
                'produks',
                'pesanan_produks.produk_id',
                '=',
                'produks.id'
            )
            ->select(
                'pesanan_produks.*',
                'produks.nama_produk'
            )
            ->orderByDesc('pesanan_produks.created_at')
            ->take(5)
            ->get();

        return view('dashboard', compact(
            'totalPelanggan',
            'totalLayanan',
            'jumlahPesanan',
            'pesananMenunggu',
            'pesananDiproses',
            'pesananSelesai',
            'totalPendapatan',
            'pesananTerbaru',
            'totalProduk',
            'stokProduk',
            'jumlahPesananProduk',
            'pesananProdukMenunggu',
            'pesananProdukTerbaru'
        ));
    }
}