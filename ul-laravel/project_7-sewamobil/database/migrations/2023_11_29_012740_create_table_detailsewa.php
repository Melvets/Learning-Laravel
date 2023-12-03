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
        Schema::create('detailsewa', function (Blueprint $table) {
            $table->id();
            $table->foreignID('customer_id');
            $table->foreignID('mobil_id');
            $table->integer('durasi_sewa');
            $table->date('tanggal_sewa');
            $table->date('tanggal_selesai');
            $table->integer('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailsewa');
    }
};
