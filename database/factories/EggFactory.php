<?php

namespace Database\Factories;

use Pterodactyl\Models\Egg;
use Illuminate\Database\Eloquent\Factories\Factory;

class EggFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Egg::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'uuid' => $this->faker->unique()->uuid,
            'name' => $this->faker->name,
            'description' => implode(' ', $this->faker->sentences()),
            'startup' => 'java -jar test.jar',
        ];
    }
}