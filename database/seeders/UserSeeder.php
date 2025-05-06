<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Admin
        User::updateOrCreate(
            ['email' => 'admin@ipdn.ac.id'],
            [
                'name' => 'Administrator',
                'username' => 'admin2', // ✅ tambahkan ini
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ]
        );

        // Create Dosen
        User::updateOrCreate(
            ['email' => 'dosen@ipdn.ac.id'],
            [
                'name' => 'Dr. Budi Santoso',
                'username' => 'dosen1', // ✅ tambahkan ini
                'password' => Hash::make('dosen123'),
                'role' => 'dosen',
            ]
        );

        // Create Praja
        User::updateOrCreate(
            ['email' => 'praja@ipdn.ac.id'],
            [
                'name' => 'Ahmad Praja',
                'username' => 'praja1', // ✅ tambahkan ini
                'password' => Hash::make('praja123'),
                'role' => 'praja',
            ]
        );
    }
}
