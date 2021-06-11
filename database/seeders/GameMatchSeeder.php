<?php

namespace Database\Seeders;

use App\Models\GameMatch;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Match;


class GameMatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::transaction(function() {
            GameMatch::insert([
                //home_team_id = 1
                [
                    'home_team_id' => 1,
                    'away_team_id' => 2,
                    'match_week_id' => 1,
                    'home_goal' => 30,
                    'away_goal' => 20
                ],
                [
                    'home_team_id' => 1,
                    'away_team_id' => 3,
                    'match_week_id' => 2,
                    'home_goal' => 10,
                    'away_goal' => 15
                ],
                [
                    'home_team_id' => 1,
                    'away_team_id' => 4,
                    'match_week_id' => 3,
                    'home_goal' => 8,
                    'away_goal' => 20
                ],
                //away_team_id = 1
                [
                    'home_team_id' => 2,
                    'away_team_id' => 1,
                    'match_week_id' => 4,
                    'home_goal' => 30,
                    'away_goal' => 20
                ],
                [
                    'home_team_id' => 3,
                    'away_team_id' => 1,
                    'match_week_id' => 5,
                    'home_goal' => 10,
                    'away_goal' => 15
                ],
                [
                    'home_team_id' => 4,
                    'away_team_id' => 1,
                    'match_week_id' => 6,
                    'home_goal' => 8,
                    'away_goal' => 5
                ],
                 //home_team_id = 2
                 [
                    'home_team_id' => 2,
                    'away_team_id' => 1,
                    'match_week_id' => 1,
                    'home_goal' => 30,
                    'away_goal' => 20
                ],
                [
                    'home_team_id' => 2,
                    'away_team_id' => 3,
                    'match_week_id' => 2,
                    'home_goal' => 10,
                    'away_goal' => 15
                ],
                [
                    'home_team_id' => 2,
                    'away_team_id' => 4,
                    'match_week_id' => 3,
                    'home_goal' => 8,
                    'away_goal' => 20
                ],
                //away_team_id = 2
                [
                    'home_team_id' => 1,
                    'away_team_id' => 2,
                    'match_week_id' => 4,
                    'home_goal' => 30,
                    'away_goal' => 20
                ],
                [
                    'home_team_id' => 3,
                    'away_team_id' => 2,
                    'match_week_id' => 5,
                    'home_goal' => 20,
                    'away_goal' => 25
                ],
                [
                    'home_team_id' => 4,
                    'away_team_id' => 2,
                    'match_week_id' => 6,
                    'home_goal' => 8,
                    'away_goal' => 5
                ],
                //home_team_id = 3
                [
                    'home_team_id' => 3,
                    'away_team_id' => 1,
                    'match_week_id' => 1,
                    'home_goal' => 30,
                    'away_goal' => 20
                ],
                [
                    'home_team_id' => 3,
                    'away_team_id' => 2,
                    'match_week_id' => 2,
                    'home_goal' => 10,
                    'away_goal' => 15
                ],
                [
                    'home_team_id' => 3,
                    'away_team_id' => 4,
                    'match_week_id' => 3,
                    'home_goal' => 8,
                    'away_goal' => 20
                ],
                //away_team_id = 3
                [
                    'home_team_id' => 1,
                    'away_team_id' => 3,
                    'match_week_id' => 4,
                    'home_goal' => 30,
                    'away_goal' => 20
                ],
                [
                    'home_team_id' => 2,
                    'away_team_id' => 3,
                    'match_week_id' => 5,
                    'home_goal' => 20,
                    'away_goal' => 25
                ],
                [
                    'home_team_id' => 4,
                    'away_team_id' => 3,
                    'match_week_id' => 6,
                    'home_goal' => 8,
                    'away_goal' => 5
                ],
                //home_team_id = 4
                [
                    'home_team_id' => 4,
                    'away_team_id' => 1,
                    'match_week_id' => 1,
                    'home_goal' => 30,
                    'away_goal' => 20
                ],
                [
                    'home_team_id' => 4,
                    'away_team_id' => 2,
                    'match_week_id' => 2,
                    'home_goal' => 10,
                    'away_goal' => 15
                ],
                [
                    'home_team_id' => 4,
                    'away_team_id' => 3,
                    'match_week_id' => 3,
                    'home_goal' => 8,
                    'away_goal' => 20
                ],
                //away_team_id = 4
                [
                    'home_team_id' => 1,
                    'away_team_id' => 4,
                    'match_week_id' => 4,
                    'home_goal' => 20,
                    'away_goal' => 20
                ],
                [
                    'home_team_id' => 2,
                    'away_team_id' => 4,
                    'match_week_id' => 5,
                    'home_goal' => 20,
                    'away_goal' => 25
                ],
                [
                    'home_team_id' => 3,
                    'away_team_id' => 4,
                    'match_week_id' => 6,
                    'home_goal' => 8,
                    'away_goal' => 5
                ],
            ]);
        });
    }
}
