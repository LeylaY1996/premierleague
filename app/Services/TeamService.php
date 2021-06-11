<?php

namespace App\Services;

use App\Repositories\TeamRepository;

class TeamService
{
    protected $team;

    public function __construct(TeamRepository $team)
    {
        $this->team = $team;
    }

    public function getAll()
    {
        return $this->team->getAllTeam()
;    }
}