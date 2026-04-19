<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskPrioritiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('task_priorities')->insert([
            ['name' => '高', 'sort_order' => 1],
            ['name' => '中', 'sort_order' => 2],
            ['name' => '低', 'sort_order' => 3],
        ]);
    }
}
