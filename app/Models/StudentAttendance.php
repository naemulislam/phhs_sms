<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAttendance extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function student(){
        return $this->belongsTo(Student::class);
    }
    public function group(){
        return $this->belongsTo(Group::class);
    }
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
}
