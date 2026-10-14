<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukuran extends Model
{
    use HasFactory;

    protected $table = 'ukurans';

    protected $fillable = [
        'pelanggan_id',
        'pesanan_id',
        'lingkar_dada',
        'lingkar_pinggang',
        'lingkar_pinggul',
        'panjang_baju',
        'panjang_lengan',
        'panjang_celana',
        'lingkar_paha',
        'lingkar_bawah',
        'catatan',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }
}