<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        $page = "services";

        return view("backoffice.service.all",compact("services","page"));       
    }


    public function destroy($id){
        $services = Service::find($id);
        $services->delete();

        return redirect()->back();       
    }


    public function edit($id){
        $services = Service::find($id);
        $page = "services";

        return view("backoffice.service.edit", compact("service","page"));       
    }


    public function update($id, Request $request){
       $service = Service::find($id);
       $service->icone = $request->icone;
       $service->titre = $request->titre; 
       $service->texte = $request->texte;   
       $service->updated_at = now();   

       $service->save();

       return redirect()->route("service");
    }


    public function create(){
        return view("backoffice.service.create");
    }



    public function store(Request $request){
        $service = new Service;
        $service->icone = $request->icone;
        $service->titre = $request->titre;
        $service->texte = $request->texte; 
        $service->updated_at = now();   
 
        $service->save();
 
        return redirect()->route("service");
    }
}

