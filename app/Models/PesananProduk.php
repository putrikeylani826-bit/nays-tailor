<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananProduk extends Model
{
    use HasFactory;

    protected $table = 'pesanan_produks';

    protected $fillable = [
        'kode_pesanan',
        'produk_id',
        'nama_pelanggan',
        'no_hp',
        'alamat',
        'ukuran',
        'jumlah',
        'harga_satuan',
        'total_harga',
        'status',
    ];

    protected $casts = [
        'harga_satuan' => 'decimal:2',
        'total_harga' => 'decimal:2',
        'jumlah' => 'integer',
    ];

    public function produk()
    {
        return $this->belongsTo(
            Produk::class,
            'produk_id'
        );
    }
}