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
        DB::table("skills")->insert([
            "nom"=>"HTML",
            "chiffre"=>100,
            "created_at"=>now()
        ]);  

        DB::table("skills")->insert([
            "nom"=>"CSS",
            "chiffre"=>90,
            "created_at"=>now()
        ]);  

        DB::table("skills")->insert([
            "nom"=>"JAVASCRIPT",
            "chiffre"=>75,
            "created_at"=>now()
        ]); 
        
        DB::table("skills")->insert([
            "nom"=>"PHP",
            "chiffre"=>80,
            "created_at"=>now()
        ]);  

        DB::table("skills")->insert([
            "nom"=>"Wordpress/cms",
            "chiffre"=>90,
            "created_at"=>now()
        ]);  

        DB::table("skills")->insert([
            "nom"=>"PHOTOSHOP",
            "chiffre"=>55,
            "created_at"=>now()
        ]);  
    }
}
