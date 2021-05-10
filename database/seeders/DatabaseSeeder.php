<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AboutSeeder::class);
        $this->call(FactSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(ServiceSeeder::class);
    }
}
