<?php

namespace Database\Factories;

use App\Models\Media;
use App\Models\Subject;
use App\Repositories\SubjectRepository;
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
        $user = $this->faker->randomElement(UserRepository::query()->where('role','teacher')->get());
        $subjects = $this->faker->randomElement(SubjectRepository::getAll());
        $nid = mt_rand(1000000000, 9999999999);
        return [
            'user_id' => $user->id,
            'designation' => 'Teacher',
            'subject_id' => $subjects->id,
            'nid' => $nid,
            'shift' => 'Morning',
            'join_date' => $this->faker->date(),
        ];
    }
}
