<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Repositories\UserRepository;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $teacherCount = UserRepository::query()->where('role','teacher')->count();
        // $teacher = UserRepository::query()->where('role','teacher')->get();
        // dd($teacherCount);
        // for($i = 1; $i<=$teacherCount; $i++){
        //     Teacher::factory()->create([
        //         'user_id' => $teacher->id
        //     ]);
        // }
        Teacher::factory(5)->create();
    }
}
