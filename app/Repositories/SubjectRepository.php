<?php

namespace App\Repositories;

use App\Models\Subject;

class SubjectRepository extends Repository
{
    public static function model()
    {
        return Subject::class;
    }
}
