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
        return $this->belongsTo(Team::class, 'home_team_id');
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class, 'away_team_id');
    }

    public function isHomeTeam($team)
    {
        if($this->home_team_id ==  $team->id){
            return true;
        }
        return false;
    }
}
