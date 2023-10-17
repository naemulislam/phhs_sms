<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
    public function image()
    {
        return $this->belongsTo(Media::class, 'image_id');
    }
}
