<?php

namespace App\Services;

use App\Repositories\MatchWeekRepository;

class MatchWeekService
{
    protected $matchWeekRepository;

    public function __construct(MatchWeekRepository $matchWeekRepository)
    {
        $this->matchWeekRepository = $matchWeekRepository;
    }

    public function getAll()
    {
        return $this->matchWeekRepository->getAllMatchWeek()
;    }

    public function show($model)
    {
     return $this->matchWeekRepository->show($model);
    }
}