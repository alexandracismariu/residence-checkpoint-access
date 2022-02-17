<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\User;
use App\Models\Guest;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        User::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('test'),
        ]);

        Car::factory(10)->create();

        Guest::factory(10)->create();
    }
}
