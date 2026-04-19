<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DietTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diet_types')->insert([
            ['name' => '一般食', 'code' => 'general', 'sort_order' => 1],
            ['name' => '糖尿病食', 'code' => 'diabetic', 'sort_order' => 2],
            ['name' => '腎臓病食', 'code' => 'renal', 'sort_order' => 3],
            ['name' => '肝臓病食', 'code' => 'liver', 'sort_order' => 4],
            ['name' => '胃潰瘍食', 'code' => 'gastric_ulcer', 'sort_order' => 5],
            ['name' => '膵臓病食', 'code' => 'pancreatic', 'sort_order' => 6],
            ['name' => '脂質異常症食', 'code' => 'dyslipidemia', 'sort_order' => 7],
            ['name' => '痛風食', 'code' => 'gout', 'sort_order' => 8],
            ['name' => '貧血食', 'code' => 'anemia', 'sort_order' => 9],
            ['name' => 'てんかん食', 'code' => 'epilepsy', 'sort_order' => 10],
            ['name' => '特殊検査食', 'code' => 'special_exam', 'sort_order' => 11],
            ['name' => '無菌食', 'code' => 'sterile', 'sort_order' => 12],
            ['name' => 'その他', 'code' => 'other', 'sort_order' => 99],
        ]);
    }
}
