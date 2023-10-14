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
        $this->user();
    }

    private function admin(){
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
        ]);
    }
    private function teacher(){
        User::factory()->create([
            'name' => 'teacher',
            'email' => 'teacher@gmail.com',
            'role' => 'teacher',
        ]);
    }
    private function staff(){
        User::factory()->create([
            'name' => 'staff',
            'email' => 'staff@gmail.com',
            'role' => 'staff',
        ]);
    }
    private function student(){
        for($i = 1; $i<=15; $i++){
            User::factory()->create([
                'name' => 'student'.$i,
                'email' => 'student'.$i.'@gmail.com',
                'role' => 'student',
            ]);
        }
    }
    private function user(){
        User::factory()->create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'role' => 'user',
        ]);
    }
}
