<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        $skill = Skill::all();
        $page = "skill";

        return view("backoffice.skill.all", compact("skill","page"));
    }

    public function destroy($id){
        $skill = Skill::find($id);
        $skill->delete();

        return redirect()->back();
    }

    public function edit($id){
        $skill = Skill::find($id);
        $page = "skill";

        return view("backoffice.skill.edit", compact("skill","page"));
    }

    public function update($id, Request $request){
        $skill = Skill::find($id);
        $skill->nom = $request->nom;
        $skill->pourcentage = $request->pourcentage;
        $skill->updated_at = now();

        $skill->save();

        return redirect()->route("skill");
    }

    public function create(){
        return view("backoffice.skill.create");
    }

    public function store(Request $request){
        $skill = new Skill;
        $skill->nom = $request->nom;
        $skill->pourcentage = $request->pourcentage;
        $skill->updated_at = now();

        $skill->save();

        return redirect()->route("skill");

        
    }
}
