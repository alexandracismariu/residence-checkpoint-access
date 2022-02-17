<?php

namespace Database\Factories;

use App\Models\Guest;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Guest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'number' => $this->faker->word,
            'date' => $this->faker->date('Y-m-d', 'now'),
            'arrival' => $this->faker->date('H:i:s', 'now'),
            'departure' => $this->faker->date('H:i:s', 'now'),
        ];
    }
}
