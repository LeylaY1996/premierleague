<?php

namespace App\Services;

use App\Models\GameMatch;
use App\Models\MatchWeek;
use App\Models\Team;

class StatisticsService
{
    public function getAll()
    {
        $weeks = MatchWeek::all();
        $teams = Team::all();
        $data = [];
        foreach ($weeks as $week) {
            foreach ($teams as $key => $team) {
                $gameData = $this->getGameDada($team, $week);
                $gameData['team'] = $team->name;
                $key = array_search($team->name, array_column($data, 'team'));
                if($key !== false){
                    $data[$key]['played'] += $gameData['played'];
                    $data[$key]['pts'] += $gameData['pts'];
                    $data[$key]['win'] += $gameData['win'];
                    $data[$key]['draw'] += $gameData['draw'];
                    $data[$key]['loss'] += $gameData['loss'];
                    $data[$key]['gd'] += $gameData['gd'];

                    
                }else{
                    array_push($data, $gameData);
                }
               
            }
        }
        return $data;
    }

    private function getGameDada($team, $week)
    {
        $match = $this->getMatch($team, $week);
        $pts = 0;
        $win = 0;
        $loss = 0;
        $draw = 0;
        $gd = 0;

        if($match->isHomeTeam($team)) {
            if ($match->home_goal > $match->away_goal) {
                $pts = 3;
                $win += 1;
                $gd = abs($match->home_goal - $match->away_goal); 
            }
        } else {
            if ($match->away_goal > $match->away_goal) {
                $pts = 3;
                $win += 1; 
                $gd = abs($match->home_goal - $match->away_goal); 
            }
        }
        if ($match->home_goal == $match->away_goal) {
            $pts = 1;
            $draw += 1;
        }

        if($pts == 0){
            $loss += 1;
        }

        
        return [
            "played" => 1,
            "pts" => $pts,
            "win" => $win,
            "draw" => $draw,
            "loss" => $loss,
            "gd" => $gd,
            "week" => $week->id,
        ];
    }


    private function getMatch($team, $week)
    {
        $game = GameMatch::where('home_team_id', $team->id)->where('match_week_id', $week->id)->first();
        if ($game) {
            return $game;
        } else {

            return GameMatch::where('away_team_id', $team->id)->where('match_week_id', $week->id)->first();
        }
    }
}
