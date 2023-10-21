<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\Media;
use App\Repositories\GroupRepository;
use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $students = $this->faker->randomElement(UserRepository::query()->where('role','student')->get());
        $groups = $this->faker->randomElement(GroupRepository::getAll());
        $nid = mt_rand(10000, 9999999999);
        $birthRegNo = mt_rand(1000,9999999999);
        return [
            'applicant_name'=> $this->faker->name(),
            'user_id' =>$students->id,
            'father_name'=> $this->faker->name(),
            'father_nid'=> $nid,
            'mother_name'=> $this->faker->name(),
            'mother_nid'=> $nid,
            'date_of_birth'=> $this->faker->date(),
            'birth_reg_no' => $birthRegNo,
            'phone' => $this->faker->phoneNumber(),
            'religion' => 'Islam',
            'shift' => 'morning',
            'group_id' => $groups->id,
            'image_id' => Media::factory()->create(),
        ];
    }
}
