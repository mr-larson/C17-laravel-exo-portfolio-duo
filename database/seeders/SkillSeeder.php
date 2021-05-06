<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("skill")->insert([
            "nom"=>"HTML",
            "pourcentage"=>100,
            "created_at"=>now()
        ]);

        DB::table("skill")->insert([
            "nom"=>"CSS",
            "pourcentage"=>90,
            "created_at"=>now()
        ]);

        DB::table("skill")->insert([
            "nom"=>"JAVASCRIPT",
            "pourcentage"=>75,
            "created_at"=>now()
        ]);

        DB::table("skill")->insert([
            "nom"=>"PHP",
            "pourcentage"=>80,
            "created_at"=>now()
        ]);

        DB::table("skill")->insert([
            "nom"=>"WORDPRESS/CMS",
            "pourcentage"=>90,
            "created_at"=>now()
        ]);

        DB::table("skill")->insert([
            "nom"=>"PHOTOSHOP",
            "pourcentage"=>55,
            "created_at"=>now()
        ]);
    }
}
