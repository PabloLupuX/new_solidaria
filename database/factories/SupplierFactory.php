<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'ruc' => $this->faker->unique()->numerify('1##########'),
            'phone' => $this->faker->numerify('9########'),
            'address' => $this->faker->address,
            'state' => $this->faker->boolean(),
        ];
    }
}
