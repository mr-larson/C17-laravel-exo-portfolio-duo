<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fact;
use App\Models\Portfolio;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $user = About::first();
        $skills = Skill::all();
        $portfolios = Portfolio::all();
        $facts = Fact::all();
        $page = "home";
        

        return view("home",compact("user","page","facts", "skills","portfolios"));       
    }
}
