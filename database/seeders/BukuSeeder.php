<?php

// php artisan db:seed --class=BukuSeeder

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $kategoriId1 = DB::table('tb_kategori')->where('name', 'Fiction')->value('id');
        // $kategoriId2 = DB::table('tb_kategori')->where('name', 'Science Fiction')->value('id');
        // $kategoriId3 = DB::table('tb_kategori')->where('name', 'Fantasy')->value('id');
        // Get the IDs of the kategori entries

        DB::table('tb_buku')->insert([
            [
                'judul' => 'Timun mas',
                'qty' => 10,
                'id_kategori' => 1,
                'deskripsi' => 'dongeng anak-anak indonesia',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'judul' => 'Penemu Dunia',
                'qty' => 5,
                'id_kategori' => 2,
                'deskripsi' => 'meceritakan penemu yang berdampak di dunia',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'judul' => 'Greatest Snowman',
                'qty' => 8,
                'id_kategori' => 3,
                'deskripsi' => 'Kisah seorang yang berusaha mewujudkan mimpinya',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'judul' => 'Rumah Raksasa',
                'qty' => 1,
                'id_kategori' => 1,
                'deskripsi' => 'dongeng anak-anak indonesia',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'judul' => 'Ilmuan Miskin',
                'qty' => 5,
                'id_kategori' => 2,
                'deskripsi' => 'perjuangan untuk perubahan',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'judul' => 'Avatar',
                'qty' => 4,
                'id_kategori' => 3,
                'deskripsi' => 'cerita animasi ',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'judul' => 'Roro Jonggrang',
                'qty' => 10,
                'id_kategori' => 1,
                'deskripsi' => 'menceritakan sebuah kisah cinta ',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'judul' => 'Isac Newton',
                'qty' => 5,
                'id_kategori' => 2,
                'deskripsi' => 'kehidupan seorang penemu gravitasi',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'judul' => 'Tinkerbell',
                'qty' => 8,
                'id_kategori' => 3,
                'deskripsi' => 'animasi anak-anak',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'judul' => 'Garfill',
                'qty' => 4,
                'id_kategori' => 3,
                'deskripsi' => 'menceritakan seekor kucing',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'judul' => 'Thomas Alfa Edison',
                'qty' => 5,
                'id_kategori' => 2,
                'deskripsi' => 'menceritakan perjuangan penemuan lampu',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'judul' => 'Barbie',
                'qty' => 8,
                'id_kategori' => 3,
                'deskripsi' => 'animasi yang digemari anak-anak perempuan',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'judul' => 'OWL',
                'qty' => 4,
                'id_kategori' => 3,
                'deskripsi' => 'cerita seekor burung hantu yang sering kemalangan',
                'created_at' => null,
                'updated_at' => null,
            ],
            // Add more book data as needed
        ]);
    }
}
