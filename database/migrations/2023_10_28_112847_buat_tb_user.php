<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up() : void
    {
        Schema ::create('tb_user', function (blueprint $table) {
            $table->increments('id_user');
            $table->string('nama_user',255);
            $table->string('username', 100)->unique();
            $table->string('password', 100);
            $table->string('telp', 16)->nullable();
            $table->string('level', 16);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema ::drop('tb_user');
    }

};

