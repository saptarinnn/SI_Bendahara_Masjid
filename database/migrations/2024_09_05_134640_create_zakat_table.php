<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('zakat', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 6)->unique();
            $table->string('nama', 150);
            $table->foreignId('kategori_zakat_id')->references('id')->on('kategori_zakat')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->double('jumlah');
            $table->date('tanggal');
            $table->text('keterangan');
            $table->string('bukti', 150);
            $table->enum('status', ['0','1','2']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zakat');
    }
};
