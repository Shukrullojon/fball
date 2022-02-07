<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';

    protected $fillable = [
        'cub_id',
        'team_one_id',
        'team_two_id',
        'win_id',
        'judge_id',
        'details',
        'status',
    ];
}
