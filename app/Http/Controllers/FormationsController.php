<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationsController extends Controller
{
    public function index(){ 
        $forms = Formation::all(); 

        return view('admin.pages.formations.show', compact('forms'));
    }

    public function create(){
        return view('admin.pages.formations.add');
    }

    public function store(Request $request){
        $formation = new Formation(); 
        foreach($request->all() as $key => $value) {
            if(($key != "_token") && ($key != "_method")){
                $formation->$key = $value; 
            }
        }
        $formation->save();
        return redirect()->route('admin.form.all');
    }

    public function show(Formation $id){
        $formation = $id; 
        return view('admin.pages.formations.show', compact('formation'));
    }

    public function edit(Formation $id){
        $formation = $id;
        return view('admin.pages.formations.edit', compact('formation')); 
    }

    public function update(Formation $id, Request $request){
        $formation = $id; 

        foreach($request->all() as $key => $value) {
            if(($key != "_token") && ($key != "_method")){
                $formation->$key = $value; 
            }
        }

        //dd($batiment); 
        $formation->save(); 

        return redirect()->route('admin.form.show', $formation->id); 
    }

    public function destroy(Formation $id){
        $id->delete(); 
        return redirect()->route('admin.form.all');
    }


}
