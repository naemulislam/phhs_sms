<?php

namespace Database\Factories;

use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $user = $this->faker->Element(UserRepository::getAll());
        // dd($user);
        return [
            // 'user_id' =>$user->id,
            // 'present_vill' => $this->faker->address(),
            // 'present_post' => $this->faker->address(),
            // 'present_upzilla' => $this->faker->address(),
            // 'present_dist' => $this->faker->address(),
        ];
    }
}
