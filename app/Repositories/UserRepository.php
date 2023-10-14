<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends Repository
{
    public static function model()
    {
        return User::class;
    }
}
