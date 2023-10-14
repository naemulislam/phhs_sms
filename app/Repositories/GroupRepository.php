<?php

namespace App\Repositories;

use App\Models\Group;

class GroupRepository extends Repository
{
    public static function model()
    {
        return Group::class;
    }
}
