<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameMatch extends Model
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

    public function homeTeam()
    {
        return $this->belongTo(Team::class);
    }

    public function awayTeam()
    {
        return $this->belongTo(Team::class);
    }
}
