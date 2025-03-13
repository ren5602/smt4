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
        Schema::create('t_penjualan_detail', function (Blueprint $table) {
            $table->id('detail_id');
            $table->unsignedBigInteger('penjualan_id'); // penjualan id fk t_penjualan
            $table->unsignedBigInteger('barang_id'); // barang id fk m_barang
            $table->integer('harga');
            $table->integer('jumlah');
            $table->timestamps();
            
            // define fk pada kolom penjualan_id ke kolom penjualan_id ditabel t_penjualan
            $table->foreign('penjualan_id')->references('penjualan_id')->on('t_penjualan');
            // define fk pada kolom barang_id ke kolom barang_id ditabel m_barang
            $table->foreign('barang_id')->references('barang_id')->on('m_barang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan_detail');
    }
};
