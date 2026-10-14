<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';

    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'harga',
        'ukuran',
        'stok',
        'gambar',
    ];

    protected $casts = [
        'harga' => 'decimal:2',
        'stok' => 'integer',
    ];

    public function pesananProduks()
    {
        return $this->hasMany(
            PesananProduk::class,
            'produk_id'
        );
    }
}