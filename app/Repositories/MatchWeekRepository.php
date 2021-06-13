<?php

namespace App\Repositories;

use App\Models\MatchWeek;

class MatchWeekRepository
{
    protected $match_week;

    /*  */

    public function __construct(MatchWeek $matchWeek)
    {
        $this->matchWeek = $matchWeek;
        
    }

    public function getAllMatchWeek()
    {
        return $this->matchWeek->get();
    }

 
}
