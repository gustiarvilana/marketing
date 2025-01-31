<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        User::create([
            'name' => 'superuser', // Nama admin
            'username' => 'superuser', // Nama admin
            'email' => 'admin@example.com', // Email admin
            'password' => Hash::make('09120912'), // Password admin (ganti dengan yang kuat)
            'is_admin' => 1, // Tambahkan kolom is_admin jika Anda punya
            'is_active' => 1, // Tambahkan kolom is_active jika Anda punya
        ]);
    }
}
