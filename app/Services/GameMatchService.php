<?php

namespace App\Services;

use App\Repositories\MatchLeagueRepository;

class MatchLeagueService
{
    protected $matchLeagueRepository;

    public function __construct(MatchLeagueRepository $matchLeagueRepository)
    {
        $this->matchLeagueRepository = $matchLeagueRepository;
    }

    public function getAll()
    {
        return $this->matchLeagueRepository->getAllMatch()
;    }
}