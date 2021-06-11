<?php

namespace App\Repositories;

use App\Models\MatchLeague;

class MatchLeagueRepository
{
    protected $match_league;

    /*  */

    public function __construct(MatchLeague $match_league)
    {
        $this->match_league = $match_league;
        
    }

    public function getAllMatch()
    {
        return $this->match_league->get();
    }
}
