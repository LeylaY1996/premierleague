<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function() {
            Team::insert([
                ['name' => 'Arsenal','logo' => 'https://resources.premierleague.com/premierleague/badges/25/t3.png'],
                ['name' => 'Aston Villa','logo' => 'https://resources.premierleague.com/premierleague/badges/25/t7.png'],
                ['name' => 'Brentford','logo' => 'https://resources.premierleague.com/premierleague/badges/25/t94.png'],
                ['name' => 'Burnley', 'logo' => 'https://resources.premierleague.com/premierleague/badges/25/t90.png'],
            ]);
        });
    }
}
