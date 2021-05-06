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
        DB::table("skill")->insert([
            "icone"=>"HTML",
            "chiffre"=>"html",
            "texte"=>"HTML",
            "created_at"=>now()
        ]);  
    }
}
