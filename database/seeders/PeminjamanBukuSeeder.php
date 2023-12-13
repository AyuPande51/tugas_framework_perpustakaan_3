<?php

namespace Database\Seeders;

// php artisan db:seed --class=PeminjamanBukuSeeder

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tb_peminjaman_buku')->insert([
            [
                'nama'    => 'Jaka',
                'id_buku' => '1',
                'id_user' => '1',
                'nama' => 'budi',
                'telpon' => 0986,
                'tanggal_pinjam' => now(),
                'tanggal_kembali' => now(),
                'status' => null,
                'denda' => 9000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // [
            //     'nama'    => 'Jaka',
            //     'id_buku' => '1',
            //     'id_user'=>'2',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // Add more peminjaman_buku data as needed
        ]);
    }
}
