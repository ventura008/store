<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ToukeUser extends Model
{
    protected $table  ='toukeuser'; 

    protected $fillable = [
        'token',
        'user_id',
        'valido_ate',
    ];
}