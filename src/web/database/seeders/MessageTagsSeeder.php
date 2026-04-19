<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('message_tags')->insert([
            ['name' => '急ぎ', 'sort_order' => 1],
            ['name' => '重要', 'sort_order' => 2],
            ['name' => '要確認', 'sort_order' => 3],
            ['name' => '申し送り', 'sort_order' => 4],
        ]);
    }
}
