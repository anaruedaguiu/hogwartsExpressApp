<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TrainRouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name'=> $this->faker->company(),
            'userName'=> $this->faker->firstNameFemale(),
            'origin'=> $this->faker->city(),
            'destination'=> $this->faker->city(),
            'datetime'=> $this->faker->dateTime(),
            'departureTime'=> $this->faker->time(),
            'arrivalTime'=> $this->faker->time(),
            'routeLenght'=> $this->faker->biasedNumberBetween($min = 300, $max= 500, $function = 'sqrt'),
            'availableSeats'=> $this->faker->biasedNumberBetween($min = 1, $max= 120, $function = 'sqrt'),
            'features' => $this->faker->realText(),
            'img'=> $this->faker->imageUrl(),

        ];
    }
}
