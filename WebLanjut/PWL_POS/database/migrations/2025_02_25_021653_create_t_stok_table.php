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
        Schema::create('t_stok', function (Blueprint $table) {
            $table->id('stok_id');
            $table->unsignedBigInteger('barang_id');// barang id fk m_barang
            $table->unsignedBigInteger('user_id');// user id fk m_user
            $table->datetime('stok_tanggal');
            $table->integer('stok_jumlah');
            $table->timestamps();
            
            // define fk pada kolom barang_id ke kolom barang_id ditabel m_barang
            $table->foreign('barang_id')->references('barang_id')->on('m_barang');
            // define fk pada kolom user_id ke kolom user_id ditabel m_user
            $table->foreign('user_id')->references('user_id')->on('m_user');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_stok');
    }
};
