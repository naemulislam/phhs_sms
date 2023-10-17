<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Media;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/GroupWiseSubject.json');
        $groups = json_decode($json);
        // dd($groups);
        foreach($groups as $group){
            $groupId = Group::create([
                'name'=> $group->name
            ]);
            if(isset($group->subjects) && $group->subjects){
                foreach($group->subjects as $subject){
                    $code = mt_rand(100, 999);
                    Subject::create([
                        'name' => $subject->name,
                        'group_id' => $groupId->id,
                        'code' => $code
                    ]);
                }
            }
        }

    }
}
