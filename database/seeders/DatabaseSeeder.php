<?php

namespace Database\Seeders;

use App\Models\Meeting;
use Database\Factories\MeetingFactory;
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
        // User::factory(10)->create();
        Meeting::factory(10)->create();
    }
}
