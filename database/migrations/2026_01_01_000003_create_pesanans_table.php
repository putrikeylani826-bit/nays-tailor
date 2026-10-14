<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pesanans', function (Blueprint $table) {

            $table->id();

            $table->string('kode_pesanan')->unique();

            $table->foreignId('pelanggan_id')
                ->constrained('pelanggans')
                ->cascadeOnDelete();

            $table->foreignId('layanan_id')
                ->constrained('layanans')
                ->cascadeOnDelete();

            $table->date('tanggal_pesan');

            $table->date('tanggal_selesai')->nullable();

            $table->integer('jumlah')->default(1);

            $table->decimal('total_harga', 12, 2)->default(0);

            $table->enum('status', [
                'Menunggu',
                'Diproses',
                'Selesai',
                'Diambil',
                'Dibatalkan'
            ])->default('Menunggu');

            $table->text('catatan')->nullable();

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};