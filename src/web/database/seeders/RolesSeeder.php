<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['name' => '一般', 'code' => 'general', 'sort_order' => 1],
            ['name' => '管理者', 'code' => 'admin', 'sort_order' => 2],
        ]);
    }
}
