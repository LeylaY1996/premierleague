<?php

namespace App\Services;

use App\Repositories\GameMatchRepository;

class GameMatchService
{
    protected $gameMatchRepository;

    public function __construct(GameMatchRepository $gameMatchRepository)
    {
        $this->gameMatchRepository = $gameMatchRepository;
    }

    public function getAll()
    {
        return $this->gameMatchRepository->getAllMatch()
;    }
}