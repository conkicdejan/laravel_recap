<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CarSeeder::class,
            PostSeeder::class,
        ]);
        \App\Models\User::factory(10)->create();

        //Seed the countries
        $this->call('CountriesSeeder');
        $this->command->info('Seeded the countries!');

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
