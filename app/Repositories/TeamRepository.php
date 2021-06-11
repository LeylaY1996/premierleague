<?php

namespace App\Repositories;

use App\Models\Team;

class TeamRepository
{
    protected $team;

    /*  */

    public function __construct(Team $team)
    {
        $this->team = $team;
        
    }

    public function getAllTeam()
    {
        return $this->team->get();
    }
}
