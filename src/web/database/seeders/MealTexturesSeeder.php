<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MealTexturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('meal_textures')->insert([
            ['name' => '常食', 'code' => 'normal', 'sort_order' => 1],
            ['name' => '軟食', 'code' => 'soft', 'sort_order' => 2],
            ['name' => 'ミンチ食', 'code' => 'mince', 'sort_order' => 3],
            ['name' => 'ペースト食', 'code' => 'paste', 'sort_order' => 4],
            ['name' => '流動食', 'code' => 'liquid', 'sort_order' => 5],
        ]);
    }
}
