<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggans';

    protected $fillable = [
        'nama',
        'no_hp',
        'alamat',
        'email',
    ];

    public function pesanans()
    {
        return $this->hasMany(Pesanan::class);
    }

    public function ukurans()
    {
        return $this->hasMany(Ukuran::class);
    }
}