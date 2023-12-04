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
        Schema::create('mobil', function (Blueprint $table) {
            $table->id();
            $table->string('merk');
            $table->string('model');
            $table->integer('tahun_produksi');
            $table->string('warna');
            $table->string('nomor_polisi');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobil');
    }
};
