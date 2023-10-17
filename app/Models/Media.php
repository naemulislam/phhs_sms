<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Media extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function file(): Attribute
    {
        $defualt=  File::exists(public_path($this->src)) ? asset($this->src) : (Storage::exists($this->src) ? Storage::url($this->src) : asset('defaults/noimage/no_img.jpg'));
        return Attribute::make(
            get: fn () => $defualt,
        );
    }
}
