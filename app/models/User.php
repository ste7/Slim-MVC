<?php

namespace App\Models;
use Illuminate\Database\Capsule;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    protected $fillable = [
        'first_name',
        'last_name',
        'username'
    ];
}