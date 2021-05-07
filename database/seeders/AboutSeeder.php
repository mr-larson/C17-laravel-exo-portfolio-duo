<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("abouts")->insert([
            "birthday"=>"1995-05-01",
            "website"=>"www.example.com",
            "phone"=>"+123 456 7890",
            "city"=>"New York, USA",
            "age"=>30,
            "degree"=>"Master",
            "email"=>"email@example.com",
            "freelance"=>"Available",
            "created_at"=>now()
        ]); 
    }
}
