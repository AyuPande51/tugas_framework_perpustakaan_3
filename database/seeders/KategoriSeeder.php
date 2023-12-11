<?php

// php artisan db:seed --class=KategoriSeeder

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_kategori')->insert([
            [
                'nama_kategori' => 'Fiction',
                
            ],
            [
                'nama_kategori' => 'Science Fiction',
                
            ],
            [
                'nama_kategori' => 'Fantasy',
                
            ],
            [
                'nama_kategori' => 'Mystery',
                
            ],
            [
                'nama_kategori' => 'Biography',
                
            ],
            // Add more categories as needed
        ]);
    }
}
