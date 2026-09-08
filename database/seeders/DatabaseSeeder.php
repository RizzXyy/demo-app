<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat 1 User Admin via State
        User::factory()->admin()->create([
            'name' => 'Admin Utama',
            'email' => 'admin@example.com',
        ]);

        // 2. Buat 10 User biasa dengan data Faker lokal
        User::factory(10)->create();
    }
}