<?php

namespace App\Repositories;

use App\Models\Teacher;

class TeacherRepository extends Repository
{
    public static function model()
    {
        return Teacher::class;
    }
}
