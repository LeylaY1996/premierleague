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
                ['name' => '1.hafta'],
                ['name' => '2.hafta'],
                ['name' => '3.hafta'],
                ['name' => '4.hafta'],
                ['name' => '5.hafta'],
                ['name' => '6.hafta'],
            ]);
        });
    }
}
