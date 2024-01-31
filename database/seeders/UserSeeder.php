<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // dd('ok');
        $this->admin();
        $this->teacher();
        $this->student();
        $this->staff();
        $this->user();
    }

    private function admin()
    {
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
        ]);
        Address::create([
            'user_id' => $user->id,
            'present_vill' => 'default village',
        ]);
    }
    private function teacher()
    {
        for ($i = 1; $i <= 5; $i++) {
            $teacher = User::factory()->create([
                'name' => 'teacher' . $i,
                'email' => 'teacher' . $i . '@gmail.com',
                'role' => 'teacher',
            ]);
            Address::create([
                'user_id' => $teacher->id,
                'present_vill' => 'default village',
            ]);
        }
    }
    private function staff()
    {
        for ($i = 1; $i <= 5; $i++) {
            $staff = User::factory()->create([
                'name' => 'staff' . $i,
                'email' => 'staff' . $i . '@gmail.com',
                'role' => 'staff',
            ]);
            Address::create([
                'user_id' => $staff->id,
                'present_vill' => 'default village',
            ]);
        }
    }
    private function student()
    {
        for ($i = 1; $i <= 15; $i++) {
            $student = User::factory()->create([
                'name' => 'student' . $i,
                'email' => 'student' . $i . '@gmail.com',
                'role' => 'student',
            ]);
            Address::create([
                'user_id' => $student->id,
                'present_vill' => 'default village',
            ]);
        }
    }
    private function user()
    {
        User::factory()->create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'role' => 'user',
        ]);
    }
}
