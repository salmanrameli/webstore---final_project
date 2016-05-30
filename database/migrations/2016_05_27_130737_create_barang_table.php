<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('barang_nama');
            $table->integer('barang_harga');
            $table->text('barang_deskripsi');
            $table->string('barang_supplier');
            $table->integer('barang_stok');
            $table->string('barang_jenis');
            
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
        Schema::drop('barang');
    }
}
