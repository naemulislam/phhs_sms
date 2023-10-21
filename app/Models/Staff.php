<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function image(){
        return $this->belongsTo(Media::class,'profile_id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
