<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pembayarans', function (Blueprint $table) {

            $table->id();

            $table->foreignId('pesanan_id')
                ->constrained('pesanans')
                ->cascadeOnDelete();

            $table->date('tanggal');

            $table->decimal('jumlah', 12, 2);

            $table->enum('metode', [
                'Cash',
                'Transfer',
                'QRIS'
            ])->default('Cash');

            $table->text('keterangan')->nullable();

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};