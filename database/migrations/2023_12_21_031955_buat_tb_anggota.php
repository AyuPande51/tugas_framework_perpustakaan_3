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
    public function up() : void
    {
        Schema ::create('tb_anggota', function (blueprint $table) {
            $table->increments('id_anggota');
            $table->string('nama_anggota',255);
            $table->string('email',255);   
            $table->timestamps();        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        schema ::drop('tb_anggota');
    }

};
