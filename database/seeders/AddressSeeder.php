<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $userCount = User::count();
        // for($i = 1; $i<= $userCount; $i++){
        //     $user = UserRepository::query()->where('is_active')->get();
        //     dd($user->id);
        //     Address::create([
        //     'user_id' =>$user->id,
        //     'present_vill' => 'default village',
        //     'present_post' => 'default post',
        //     'present_upzilla' => 'default upzilla',
        //     'present_dist' => 'default district',
        //     ]);
        // }
    }
}
