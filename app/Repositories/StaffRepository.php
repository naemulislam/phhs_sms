<?php

namespace App\Repositories;

use App\Models\Staff;

class StaffRepository extends Repository
{
    public static function model()
    {
        return Staff::class;
    }
}
