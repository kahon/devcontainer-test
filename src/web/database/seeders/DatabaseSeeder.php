<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesSeeder::class,
            JobTypesSeeder::class,
            RequestStatusesSeeder::class,
            GendersSeeder::class,
            RiskLevelsSeeder::class,
            DietTypesSeeder::class,
            MealTexturesSeeder::class,
            MessageTagsSeeder::class,
            TaskPrioritiesSeeder::class,
        ]);
    }
}
