<?php

namespace Database\Seeders;

use Database\Factories\CovidTrackerFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CovidTracker;

class CovidTrackerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       CovidTracker::factory(50)->create();
    }
}
