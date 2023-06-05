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
        Schema::create('penukaran_poins', function (Blueprint $table) {
            $table->id();
            $table->string('id_penukaranpoin');
             $table->string('id_poin');
            $table->string('id_pelanggan');
            $table->string('id_konsumen');
            $table->string('Jumlah_Transaksi');
            $table->integer('Total_Poin');
            $table->integer('Hadiah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penukaran_poins');
    }
};
