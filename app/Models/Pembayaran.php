<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayarans';

    protected $fillable = [
        'pesanan_id',
        'tanggal_bayar',
        'jumlah',
        'metode',
        'keterangan',
    ];

    protected $casts = [
        'tanggal_bayar' => 'date',
        'jumlah' => 'decimal:2',
    ];

    public function pesanan()
    {
        return $this->belongsTo(
            Pesanan::class,
            'pesanan_id'
        );
    }
}