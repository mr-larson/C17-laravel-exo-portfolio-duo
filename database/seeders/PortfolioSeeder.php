<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("portfolios")->insert([
            "url"=>"/img/portfolio/porfolio-1.jpg",
            "categorie"=>"app",
            "created_at"=>now()
        ]);

        DB::table("portfolios")->insert([
            "url"=>"/img/portfolio/porfolio-3.jpg",
            "categorie"=>"app",
            "created_at"=>now()
        ]);

        DB::table("portfolios")->insert([
            "url"=>"/img/portfolio/porfolio-6.jpg",
            "categorie"=>"app",
            "created_at"=>now()
        ]);

        DB::table("portfolios")->insert([
            "url"=>"/img/portfolio/porfolio-4.jpg",
            "categorie"=>"card",
            "created_at"=>now()
        ]);
        
        DB::table("portfolios")->insert([
            "url"=>"/img/portfolio/porfolio-7.jpg",
            "categorie"=>"card",
            "created_at"=>now()
        ]); 

        DB::table("portfolios")->insert([
            "url"=>"/img/portfolio/porfolio-8.jpg",
            "categorie"=>"card",
            "created_at"=>now()
        ]); 

        DB::table("portfolios")->insert([
            "url"=>"/img/portfolio/porfolio-2.jpg",
            "categorie"=>"web",
            "created_at"=>now()
        ]);

        DB::table("portfolios")->insert([
            "url"=>"/img/portfolio/porfolio-5.jpg",
            "categorie"=>"web",
            "created_at"=>now()
        ]);

        DB::table("portfolios")->insert([
            "url"=>"/img/portfolio/porfolio-9.jpg",
            "categorie"=>"web",
            "created_at"=>now()
        ]);
    }
}
