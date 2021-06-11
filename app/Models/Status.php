<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id',
        'played',
       'won',
       'draw',
       'lose',
       'goal_drawn',
       'points',
    ];
}
