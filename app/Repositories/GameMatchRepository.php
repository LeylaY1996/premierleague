<?php

namespace App\Repositories;

use App\Models\GameMatch;

class GameMatchRepository
{
    protected $game_match;

    /*  */

    public function __construct(GameMatch $game_match)
    {
        $this->game_match = $game_match;
        
    }

    public function getAllMatch()
    {
        return $this->game_match->get();
    }

    public function FilterWeek($query, $filters)
  {
    if( isset($filters['type']) ){
      $query->where('type', '=', $filters['type']);
    }
   // keep going for all of your filters
  }
}
