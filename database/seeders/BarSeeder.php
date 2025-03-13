<?php

namespace Database\Seeders;

use App\Models\Bar;
use App\Models\User;
use Illuminate\Database\Seeder;

class BarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (User::count() == 0) {
            User::factory()->count(10)->create(); // Create 10 users if none exist
        }

        Bar::factory()->count(10)->create(); // Creates 10 fake items
    }
}
