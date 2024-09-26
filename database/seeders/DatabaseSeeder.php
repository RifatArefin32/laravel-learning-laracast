<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Job;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a record for user model
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password'),
        ]);

        // Create a record for user model
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Create 2 jobs using factory
        Job::factory(2)->create();

        // We can call a seeder class from another class
        // $this->call(JobSeeder::class);
    }
}
