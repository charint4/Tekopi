<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransaksiBerisiProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_berisi_produk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tran');
            $table->foreign('id_tran')->references('id_tran')->on('transaksi')->onDelete('cascade');
            $table->unsignedBigInteger('id_prod');
            $table->foreign('id_prod')->references('id_prod')->on('produk')->onDelete('cascade');
            $table->unsignedBigInteger('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_berisi_produk');
    }
}
