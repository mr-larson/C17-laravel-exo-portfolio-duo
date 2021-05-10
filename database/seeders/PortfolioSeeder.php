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
            "url"=>"/img/portfolio/portfolio-1.jpg",
            "categorie"=>"app",
            "created_at"=>now()
        ]);

        DB::table("portfolios")->insert([
            "url"=>"/img/portfolio/portfolio-3.jpg",
            "categorie"=>"app",
            "created_at"=>now()
        ]);

        DB::table("portfolios")->insert([
            "url"=>"/img/portfolio/portfolio-6.jpg",
            "categorie"=>"app",
            "created_at"=>now()
        ]);

        DB::table("portfolios")->insert([
            "url"=>"/img/portfolio/portfolio-4.jpg",
            "categorie"=>"card",
            "created_at"=>now()
        ]);
        
        DB::table("portfolios")->insert([
            "url"=>"/img/portfolio/portfolio-7.jpg",
            "categorie"=>"card",
            "created_at"=>now()
        ]); 

        DB::table("portfolios")->insert([
            "url"=>"/img/portfolio/portfolio-8.jpg",
            "categorie"=>"card",
            "created_at"=>now()
        ]); 

        DB::table("portfolios")->insert([
            "url"=>"/img/portfolio/portfolio-2.jpg",
            "categorie"=>"web",
            "created_at"=>now()
        ]);

        DB::table("portfolios")->insert([
            "url"=>"/img/portfolio/portfolio-5.jpg",
            "categorie"=>"web",
            "created_at"=>now()
        ]);

        DB::table("portfolios")->insert([
            "url"=>"/img/portfolio/portfolio-9.jpg",
            "categorie"=>"web",
            "created_at"=>now()
        ]);
    }
}
