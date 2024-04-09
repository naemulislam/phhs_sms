<?php

namespace App\Repositories;
use App\Models\StudentLogs;

class StudentLogsRepository extends Repository
{
   public static function model(){
    return StudentLogs::class;
   }
   public static function storeByRequest($student){
    $create = self::create([
        'student_id' => $student->id,
        'group_id' => $student->group_id,
        'roll' => $student->roll,
        'total_marks' => null,
        'gpa' => null,
        'session_year' =>$student->session_year
    ]);
    return $create;
   }

}
