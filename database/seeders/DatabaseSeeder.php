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
        \App\Models\User::factory(10)->create();
        \App\Models\Livre::factory(50)->create();
        \App\Models\Image::factory(30)->create();
        $this->call(AboutSeeder::class);
        $this->call(FactSeeder::class);
        $this->call(SkillSeeder::class);
    }
}
