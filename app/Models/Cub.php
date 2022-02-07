<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cub extends Model
{
    use HasFactory;

    protected $table = 'cubs';

    protected $fillable = [
        'name',
        'image',
        'status',
    ];

}
