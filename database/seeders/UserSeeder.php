<?php

// php artisan db:seed --class=UserSeeder

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_user')->insert([
            [
                'nama_user' => 'Admin User',
                'username' => 'admin',
                'password' => Hash::make('admin_password'),
                'telp' => '1234567890',
                'level' => 'admin',
            ],
            [
                'nama_user' => 'Guest User',
                'username' => 'guest',
                'password' => Hash::make('guest_password'),
                'telp' => '9876543210',
                'level' => 'guest',
            ],
            // Add more user data as needed
        ]);
    }
}
