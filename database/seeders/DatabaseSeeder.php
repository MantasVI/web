<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    { 
        \Log::info('Seeded 10,000 users into the database.');
        User::factory(10000)->create();
       
        User::create([
            'role' => 'admin',
            'email' => 'adminas@admin.com',
            'username' => 'admin',
            'password' => 'admin123',
        ]);

         $this->call([ContentSeeder::class,]);
    }
}
