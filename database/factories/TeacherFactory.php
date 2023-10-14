<?php

namespace Database\Factories;

use App\Models\Media;
use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user= $this->faker->randomElement(UserRepository::query()->where('role','teacher')->get());
        return [
            'user_id' => $user->id,
            'profile_id' => Media::factory()->create(),
            'designation' => 'Teacher',
            'subject' => $this->faker->randomElement(['English', 'Bangla']),
            'shift' => 'Morning',
            'join_date' => $this->faker->date(),
            'address' => $this->faker->address(),
        ];
    }
}
