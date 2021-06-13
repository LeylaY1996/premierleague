<?php

namespace Database\Seeders;

use App\Models\GameMatch;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Match;
use App\Models\MatchWeek;
use App\Models\Team;

class GameMatchSeeder extends Seeder
{


    private function hasTeamPlayed($team, $week){
        $hasPlayed = false;
        $game = GameMatch::where('home_team_id', $team->id)->where('match_week_id', $week->id)->first();
        if($game){
            $hasPlayed =true;
        }
        $game = GameMatch::where('away_team_id', $team->id)->where('match_week_id', $week->id)->first();
        if($game){
            $hasPlayed =true;

        }
        return $hasPlayed;
    }

    private function matchAlreadyPlayed($team, $opponent)
    {
        $game = GameMatch::where('home_team_id', $team->id)->where('away_team_id', $opponent->id)->first();
        if($game){
            return true;
        }
        false;

    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $matchWeeks = MatchWeek::all();
        $teams = Team::all();
        foreach ($matchWeeks as $key => $week) {
            foreach ($teams as $key => $team) {
                foreach ($teams as $index => $opponent) {
                    if($team->id != $opponent->id){
                        if(!$this->hasTeamPlayed($team, $week) && !$this->hasTeamPlayed($opponent, $week) 
                            && !$this->matchAlreadyPlayed($team, $opponent))
                            GameMatch::create([
                                "home_team_id" => $team->id, 
                                "away_team_id" => $opponent->id,
                                "match_week_id" => $week->id,
                                "home_goal" => rand(0, 10),
                                "away_goal" => rand(0,8)
                            ]);
                       
                    }
                }
            }
        }

        // DB::transaction(function() {
        //     GameMatch::insert([
        //         //home_team_id = 1
        //         [
        //             'home_team_id' => 1,
        //             'away_team_id' => 2,
        //             'match_week_id' => 1,
        //             'home_goal' => 30,
        //             'away_goal' => 20
        //         ],
        //         [
        //             'home_team_id' => 1,
        //             'away_team_id' => 3,
        //             'match_week_id' => 2,
        //             'home_goal' => 10,
        //             'away_goal' => 15
        //         ],
        //         [
        //             'home_team_id' => 1,
        //             'away_team_id' => 4,
        //             'match_week_id' => 3,
        //             'home_goal' => 8,
        //             'away_goal' => 20
        //         ],
        //         //away_team_id = 1
        //         [
        //             'home_team_id' => 2,
        //             'away_team_id' => 1,
        //             'match_week_id' => 4,
        //             'home_goal' => 30,
        //             'away_goal' => 20
        //         ],
        //         [
        //             'home_team_id' => 3,
        //             'away_team_id' => 1,
        //             'match_week_id' => 5,
        //             'home_goal' => 10,
        //             'away_goal' => 15
        //         ],
        //         [
        //             'home_team_id' => 4,
        //             'away_team_id' => 1,
        //             'match_week_id' => 6,
        //             'home_goal' => 8,
        //             'away_goal' => 5
        //         ],
        //          //home_team_id = 2
        //          [
        //             'home_team_id' => 2,
        //             'away_team_id' => 1,
        //             'match_week_id' => 1,
        //             'home_goal' => 30,
        //             'away_goal' => 20
        //         ],
        //         [
        //             'home_team_id' => 2,
        //             'away_team_id' => 3,
        //             'match_week_id' => 2,
        //             'home_goal' => 10,
        //             'away_goal' => 15
        //         ],
        //         [
        //             'home_team_id' => 2,
        //             'away_team_id' => 4,
        //             'match_week_id' => 3,
        //             'home_goal' => 8,
        //             'away_goal' => 20
        //         ],
        //         //away_team_id = 2
        //         [
        //             'home_team_id' => 1,
        //             'away_team_id' => 2,
        //             'match_week_id' => 4,
        //             'home_goal' => 30,
        //             'away_goal' => 20
        //         ],
        //         [
        //             'home_team_id' => 3,
        //             'away_team_id' => 2,
        //             'match_week_id' => 5,
        //             'home_goal' => 20,
        //             'away_goal' => 25
        //         ],
        //         [
        //             'home_team_id' => 4,
        //             'away_team_id' => 2,
        //             'match_week_id' => 6,
        //             'home_goal' => 8,
        //             'away_goal' => 5
        //         ],
        //         //home_team_id = 3
        //         [
        //             'home_team_id' => 3,
        //             'away_team_id' => 1,
        //             'match_week_id' => 1,
        //             'home_goal' => 30,
        //             'away_goal' => 20
        //         ],
        //         [
        //             'home_team_id' => 3,
        //             'away_team_id' => 2,
        //             'match_week_id' => 2,
        //             'home_goal' => 10,
        //             'away_goal' => 15
        //         ],
        //         [
        //             'home_team_id' => 3,
        //             'away_team_id' => 4,
        //             'match_week_id' => 3,
        //             'home_goal' => 8,
        //             'away_goal' => 20
        //         ],
        //         //away_team_id = 3
        //         [
        //             'home_team_id' => 1,
        //             'away_team_id' => 3,
        //             'match_week_id' => 4,
        //             'home_goal' => 30,
        //             'away_goal' => 20
        //         ],
        //         [
        //             'home_team_id' => 2,
        //             'away_team_id' => 3,
        //             'match_week_id' => 5,
        //             'home_goal' => 20,
        //             'away_goal' => 25
        //         ],
        //         [
        //             'home_team_id' => 4,
        //             'away_team_id' => 3,
        //             'match_week_id' => 6,
        //             'home_goal' => 8,
        //             'away_goal' => 5
        //         ],
        //         //home_team_id = 4
        //         [
        //             'home_team_id' => 4,
        //             'away_team_id' => 1,
        //             'match_week_id' => 1,
        //             'home_goal' => 30,
        //             'away_goal' => 20
        //         ],
        //         [
        //             'home_team_id' => 4,
        //             'away_team_id' => 2,
        //             'match_week_id' => 2,
        //             'home_goal' => 10,
        //             'away_goal' => 15
        //         ],
        //         [
        //             'home_team_id' => 4,
        //             'away_team_id' => 3,
        //             'match_week_id' => 3,
        //             'home_goal' => 8,
        //             'away_goal' => 20
        //         ],
        //         //away_team_id = 4
        //         [
        //             'home_team_id' => 1,
        //             'away_team_id' => 4,
        //             'match_week_id' => 4,
        //             'home_goal' => 20,
        //             'away_goal' => 20
        //         ],
        //         [
        //             'home_team_id' => 2,
        //             'away_team_id' => 4,
        //             'match_week_id' => 5,
        //             'home_goal' => 20,
        //             'away_goal' => 25
        //         ],
        //         [
        //             'home_team_id' => 3,
        //             'away_team_id' => 4,
        //             'match_week_id' => 6,
        //             'home_goal' => 8,
        //             'away_goal' => 5
        //         ],
        //     ]);
        // });
    }
}
