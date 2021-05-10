<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $portfolios = Portfolio::all();
        $page = "portfolios";

        return view("backoffice.portfolio.all",compact("portfolios","page"));       
    }


    public function destroy($id){
        $portfolio = Portfolio::find($id);
        $portfolio->delete();

        return redirect()->back();       
    }


    public function edit($id){
        $portfolio = Portfolio::find($id);
        $page = "portfolio";

        return view("backoffice.portfolio.edit", compact("portfolio","page"));       
    }


    public function update($id, Request $request){
       $portfolio = Portfolio::find($id);
       $portfolio->url = $request->url;
       $portfolio->categorie = $request->categorie;    
       $portfolio->updated_at = now();   

       $portfolio->save();

       return redirect()->route("portfolio");
    }


    public function create(){
        return view("backoffice.portfolio.create");
    }



    public function store(Request $request){
        $portfolio = new Portfolio;
        $portfolio->url = $request->url;
        $portfolio->categorie = $request->categorie; 
        $portfolio->updated_at = now();   
 
        $portfolio->save();
 
        return redirect()->route("portfolio");
    }
}
