<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about = About::all();
        $page = "abouts";

        return view("backoffice.about.all",compact("about","page"));       
    }


    public function destroy($id){
        $about = About::find($id);
        $about->delete();

        return redirect()->back();       
    }


    public function edit($id){
        $about = About::find($id);
        $page = "abouts";

        return view("backoffice.about.edit", compact("about","page"));       
    }


    public function update($id, Request $request){
       $about = About::find($id);
       $about->birthday = $request->birthday;
       $about->website = $request->website;
       $about->phone = $request->phone; 
       $about->city = $request->city; 
       $about->age = $request->age;  
       $about->degree = $request->degree;
       $about->email = $request->email;
       $about->freelance = $request->freelance;
       $about->updated_at = now();   

       $about->save();

       return redirect()->route("about");
    }


    public function create(){
        return view("backoffice.about.create");
    }



    public function store(Request $request){
        $about = new About;
        $about->nom = $request->nom;
        $about->address = $request->address; 
        $about->phone = $request->phone;
        $about->updated_at = now();   
 
        $about->save();
 
        return redirect()->route("about");
    }
}
