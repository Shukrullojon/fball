<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $table = 'players';

    protected $fillable = [
        'name',
        'phone',
        'position_id',
        'team_id',
        'login',
        'password',
        'details',
        'image',
        'status'
    ];

}
