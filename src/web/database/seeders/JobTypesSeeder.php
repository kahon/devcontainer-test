<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('job_types')->insert([
            ['name' => '管理栄養士', 'code' => 'dietitian', 'sort_order' => 1],
            ['name' => '医師', 'code' => 'doctor', 'sort_order' => 2],
            ['name' => '看護師', 'code' => 'nurse', 'sort_order' => 3],
            ['name' => '薬剤師', 'code' => 'pharmacist', 'sort_order' => 4],
            ['name' => '歯科衛生士', 'code' => 'dental_hygienist', 'sort_order' => 5],
        ]);
    }
}
