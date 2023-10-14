<?php

namespace App\Repositories;

use App\Models\Student;

class StudentRepository extends Repository
{
    public static function model()
    {
        return Student::class;
    }
}
