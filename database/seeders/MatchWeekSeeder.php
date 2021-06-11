<?php

namespace Database\Seeders;

use App\Models\MatchWeek;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatchWeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function() {
            MatchWeek::insert([
                ['name' => '1 st'],
                ['name' => '2 nd'],
                ['name' => '3 rd'],
                ['name' => '4 th'],
                ['name' => '5 th'],
                ['name' => '6 th'],
            ]);
        });
    }
}
