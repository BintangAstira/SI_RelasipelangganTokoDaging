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
        Schema::create('dagings', function (Blueprint $table) {
            $table->id();
            $table->string('id_daging');
            $table->string('id_pegawai');
            $table->string('kode_daging');
            $table->string('harga');
            $table->string('merk');
            $table->string('masuk');
            $table->string('keluar');
            $table->string('total');
            $table->string('tanggal');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dagings');
    }
};
