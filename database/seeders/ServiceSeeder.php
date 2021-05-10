<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("services")->insert([
            "icone"=>'<i class="icofont-computer"></i>',
            "titre"=>"titre1",
            "texte"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
            "created_at"=>now()
        ]);

        DB::table("services")->insert([
            "icone"=>'<i class="icofont-chart-bar-graph"></i>',
            "titre"=>"titre2",
            "texte"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
            "created_at"=>now()
        ]);
        
        DB::table("services")->insert([
            "icone"=>'<i class="icofont-earth"></i>',
            "titre"=>"titre3",
            "texte"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
            "created_at"=>now()
        ]);  

        DB::table("services")->insert([
            "icone"=>'<i class="icofont-image"></i>',
            "titre"=>"titre4",
            "texte"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
            "created_at"=>now()
        ]);  

        DB::table("services")->insert([
            "icone"=>'<i class="icofont-settings"></i>',
            "titre"=>"titre5",
            "texte"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
            "created_at"=>now()
        ]);

        DB::table("services")->insert([
            "icone"=>'<i class="icofont-tasks-alt"></i>',
            "titre"=>"titre6",
            "texte"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
            "created_at"=>now()
        ]);  
    }
}
