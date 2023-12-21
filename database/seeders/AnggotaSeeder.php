<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_anggota')->insert([
            [
                'id_anggota' => '01',
                'nama_anggota' => 'Cahya',
                'email' => 'cahya04@gmail.com',
                
            ],
            [
                'id_anggota' => '02',
                'nama_anggota' => 'Putri Dewi',
                'email' => 'PutriiDewi@gmail.com',
                
            ],
            [
                'id_anggota' => '03',
                'nama_anggota' => 'Tasya Kemala ',
                'email' => 'TasyaaK24@gmail.com',
                
            ],
            // Add more user data as needed
        ]);
    }
}