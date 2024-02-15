<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];
    public function userAddress(){
        return $this->hasOne(Address::class,'user_id');
    }
    public function teacher(){
        return $this->hasOne(Teacher::class,'user_id');
    }
    public function student(){
        return $this->hasOne(Student::class,'user_id');
    }
    // public function teachers(){
    //     return $this->ManyToMany(Teacher::class,'user_id');
    // }
    public function staff(){
        return $this->hasOne(Staff::class,'user_id');
    }
    public function image()
    {
        return $this->belongsTo(Media::class, 'profile_id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
