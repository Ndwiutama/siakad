<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@ipdn.ac.id',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        // Create Dosen
        User::create([
            'name' => 'Dr. Budi Santoso',
            'email' => 'dosen@ipdn.ac.id',
            'password' => Hash::make('dosen123'),
            'role' => 'dosen',
        ]);

        // Create Praja
        User::create([
            'name' => 'Ahmad Praja',
            'email' => 'praja@ipdn.ac.id',
            'password' => Hash::make('praja123'),
            'role' => 'praja',
        ]);
    }
}
