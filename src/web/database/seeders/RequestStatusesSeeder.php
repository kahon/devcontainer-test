<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequestStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('request_statuses')->insert([
            ['name' => '申請中', 'code' => 'pending', 'sort_order' => 1],
            ['name' => '承認', 'code' => 'approved', 'sort_order' => 2],
            ['name' => '却下', 'code' => 'rejected', 'sort_order' => 3],
        ]);
    }
}
