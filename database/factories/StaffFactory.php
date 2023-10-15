<?php

namespace Database\Factories;

use App\Models\Media;
use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = $this->faker->randomElement(UserRepository::query()->where('role','staff')->get());
        $pdsId = mt_rand(10000, 999999);
        return [
            'user_id' => $user->id,
            'profile_id' => Media::factory()->create(),
            'designation' => 'Staff',
            'pds' => $pdsId,
            'shift' => 'Morning',
            'join_date' => $this->faker->date(),
        ];
    }
}
