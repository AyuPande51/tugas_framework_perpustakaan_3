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
        Schema::create('tb_buku', function (Blueprint $table) {
            $table->increments('id_buku');
            $table->string('judul');
            $table->integer('qty');
            $table->unsignedInteger('id_kategori');
            $table->text('deskripsi');
            $table->string('gambar');
            $table->timestamps();

            // $table->foreign('id_kategori')->references('id')->on('tb_kategori');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
};
