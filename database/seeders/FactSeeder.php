<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("facts")->insert([
            "icone"=>'<i class="icofont-simple-smile"></i>',
            "chiffre"=>232,
            "texte"=>"happy client",
            "created_at"=>now()
        ]);  

        DB::table("facts")->insert([
            "icone"=>'<i class="icofont-document-folder"></i>',
            "chiffre"=>521,
            "texte"=>"project",
            "created_at"=>now()
        ]);  

        DB::table("facts")->insert([
            "icone"=>'<i class="icofont-live-support"></i>',
            "chiffre"=>1463,
            "texte"=>"hours of support",
            "created_at"=>now()
        ]);  

        DB::table("facts")->insert([
            "icone"=>'<i class="icofont-users-alt-5"></i>',
            "chiffre"=>15,
            "texte"=>"hard workers",
            "created_at"=>now()
        ]);  
    }
}
