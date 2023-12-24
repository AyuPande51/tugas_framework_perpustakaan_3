<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_peminjaman_buku', function (Blueprint $table) {
            $table->increments('id_pinjam');
            $table->bigInteger('id_user');
            $table->bigInteger('id_buku');
            $table->string('nama',255);
            $table->string('telpon',255);
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->string('status',20);
            $table->integer('stok');
            $table->integer('denda');
            $table->timestamps();
            
            
        
            // $table->foreign('id_user')->references('id_user')->on('tb_user');
            // $table->foreign('id_buku')->references('id')->on('tb_buku');
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_peminjaman_buku');
    }
};
