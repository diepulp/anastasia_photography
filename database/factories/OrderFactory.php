<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => fake()->name,
            'email' => fake()->unique()->safeEmail,
            'message' => $this->faker->sentence,
            'send_message_copy' => $this->faker->boolean(),
            'session_type' => $this->getType(),
            'submitted_on' => Carbon::now(),
            'datepicker' => Carbon::now(),

        ];
    }

    public function getType()
    {
        $index = rand(0, 2);
        $type = ['wedding', 'location', 'maternity'];

        return $type[$index];
    }
}
