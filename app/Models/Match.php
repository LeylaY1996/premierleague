<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use HasFactory;

    protected $fillable = [
        'home_team',
        'away_team',
        'week_id',
        'home_goal',
        'away_goal',
        'played',
    ];
}
