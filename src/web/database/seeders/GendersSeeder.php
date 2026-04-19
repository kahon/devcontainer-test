<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GendersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genders')->insert([
            ['name' => '男性', 'code' => 'male', 'sort_order' => 1],
            ['name' => '女性', 'code' => 'female', 'sort_order' => 2],
            ['name' => 'その他', 'code' => 'other', 'sort_order' => 3],
            ['name' => '不明', 'code' => 'unknown', 'sort_order' => 4],
        ]);
    }
}
