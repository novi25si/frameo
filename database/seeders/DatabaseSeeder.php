<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'novi25si@mahasiswa.pcr.ac.id'],
            [
                'name'     => 'Admin FRAMEO',
                'password' => Hash::make('admin123'),
            ]
        );
    }
}
