<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ukurans', function (Blueprint $table) {

            $table->id();

            $table->foreignId('pelanggan_id')
                ->constrained('pelanggans')
                ->cascadeOnDelete();

            $table->foreignId('pesanan_id')
                ->nullable()
                ->constrained('pesanans')
                ->cascadeOnDelete();

            $table->decimal('lingkar_dada', 6, 2)->nullable();

            $table->decimal('lingkar_pinggang', 6, 2)->nullable();

            $table->decimal('lingkar_pinggul', 6, 2)->nullable();

            $table->decimal('panjang_baju', 6, 2)->nullable();

            $table->decimal('panjang_lengan', 6, 2)->nullable();

            $table->decimal('panjang_celana', 6, 2)->nullable();

            $table->decimal('lingkar_paha', 6, 2)->nullable();

            $table->decimal('lingkar_bawah', 6, 2)->nullable();

            $table->text('catatan')->nullable();

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ukurans');
    }
};