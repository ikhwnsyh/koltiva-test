<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->hasPosts(5)->create([
            'name' => 'Koltiva',
            'email' => 'test@example.com',
        ]);
        $this->call([
            PostSeeder::class,
            CommentSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();


    }
}
