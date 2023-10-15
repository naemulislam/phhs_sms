<?php

namespace Database\Seeders;

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
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
        ]);
    }
    private function teacher()
    {
        for ($i = 1; $i <= 5; $i++) {
            User::factory()->create([
                'name' => 'teacher' . $i,
                'email' => 'teacher' . $i . '@gmail.com',
                'role' => 'teacher',
            ]);
        }
    }
    private function staff()
    {
        for ($i = 1; $i <= 5; $i++) {
            User::factory()->create([
                'name' => 'staff'.$i,
                'email' => 'staff'.$i.'@gmail.com',
                'role' => 'staff',
            ]);
        }
    }
    private function student()
    {
        for ($i = 1; $i <= 15; $i++) {
            User::factory()->create([
                'name' => 'student' . $i,
                'email' => 'student' . $i . '@gmail.com',
                'role' => 'student',
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
