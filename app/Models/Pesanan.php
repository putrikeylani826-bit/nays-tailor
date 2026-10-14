<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanans';

    protected $fillable = [
        'kode_pesanan',
        'pelanggan_id',
        'layanan_id',
        'tanggal_masuk',
        'tanggal_selesai',
        'harga',
        'dp',
        'status',
    ];

    protected $casts = [
        'tanggal_masuk' => 'date',
        'tanggal_selesai' => 'date',
        'harga' => 'decimal:2',
        'dp' => 'decimal:2',
    ];


    /*
    |--------------------------------------------------------------------------
    | RELASI PELANGGAN
    |--------------------------------------------------------------------------
    */

    public function pelanggan()
    {
        return $this->belongsTo(
            Pelanggan::class,
            'pelanggan_id'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | RELASI LAYANAN
    |--------------------------------------------------------------------------
    */

    public function layanan()
    {
        return $this->belongsTo(
            Layanan::class,
            'layanan_id'
        );
    }
}