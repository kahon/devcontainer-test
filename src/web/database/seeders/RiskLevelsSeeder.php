<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiskLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('risk_levels')->insert([
            ['name' => '低リスク', 'code' => 'low', 'sort_order' => 1],
            ['name' => '中リスク', 'code' => 'medium', 'sort_order' => 2],
            ['name' => '高リスク', 'code' => 'high', 'sort_order' => 3],
        ]);
    }
}
