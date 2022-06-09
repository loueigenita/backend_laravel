<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CovidTracker>
 */
class CovidTrackerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'country'=> $this->faker->country,
            'deaths' => $this->faker->numberBetween(1000,5000),
            'recovered'=>$this->faker->numberBetween(2000,10000),
            'active_case'=>$this->faker->numberBetween(50000,100000),
            'month'=>$this->faker->randomElement(['January','February','March','April','May','June','July','August','September','October','November','December']),
        ];
    }
}
