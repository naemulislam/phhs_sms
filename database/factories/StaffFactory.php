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
        $nid = mt_rand(1000000000, 9999999999);
        return [
            'user_id' => $user->id,
            'designation' => 'Staff',
            'shift' => 'Morning',
            'nid' => $nid,
            'join_date' => $this->faker->date(),
        ];
    }
}
