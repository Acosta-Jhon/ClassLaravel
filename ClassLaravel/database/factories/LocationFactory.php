<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Location::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address'=>$this->faker->sentence(),
            'latitude'=>$this->faker->sentence(),
            'longitude'=>$this->faker->sentence(),
            'profile_id'=>$this->faker->randomElement([1,2,3,4,5])
        ];
    }
}
