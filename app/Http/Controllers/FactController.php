<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    public function index(){
        $facts = Fact::all();
        $page = "facts";

        return view("backoffice.fact.all",compact("facts","page"));       
    }


    public function destroy($id){
        $fact = Fact::find($id);
        $fact->delete();

        return redirect()->back();       
    }


    public function edit($id){
        $fact = Fact::find($id);
        $page = "facts";

        return view("backoffice.fact.edit", compact("fact","page"));       
    }


    public function update($id, Request $request){
       $fact = Fact::find($id);
       $fact->icone = $request->icone;
       $fact->chiffre = $request->chiffre;
       $fact->texte = $request->texte;    
       $fact->updated_at = now();   

       $fact->save();

       return redirect()->route("fact");
    }


    public function create(){
        return view("backoffice.fact.create");
    }



    public function store(Request $request){
        $fact = new Fact;
        $fact->icone = $request->icone;
        $fact->chiffre = $request->chiffre; 
        $fact->texte = $request->texte;
        $fact->updated_at = now();   
 
        $fact->save();
 
        return redirect()->route("fact");
    }
}
