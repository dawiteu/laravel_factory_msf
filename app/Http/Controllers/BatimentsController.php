<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use Illuminate\Http\Request;

class BatimentsController extends Controller
{
    public function index(){
        $batiments = Batiment::all();
        return view('admin.pages.batiments.show', compact('batiments'));
        //return view('pages.showbatiments', compact('batiments'));
    }

    public function create(){
        return view('admin.pages.batiments.add');
    }

    public function store(Request $request){
        $batiment = new Batiment(); 
        foreach($request->all() as $key => $value) {
            if(($key != "_token") && ($key != "_method")){
                $batiment->$key = $value; 
            }
        }
        $batiment->save();
        return redirect()->route('admin.bat.all');
    }

    public function show(Batiment $id){
        $batiment = $id; 
        return view('admin.pages.batiments.show', compact('batiment'));
    }



    public function edit(Batiment $id){
        $batiment = $id;
        return view('admin.pages.batiments.edit', compact('batiment')); 
    }

    public function update(Batiment $id, Request $request){
        $batiment = $id; 

        foreach($request->all() as $key => $value) {
            if(($key != "_token") && ($key != "_method")){
                $batiment->$key = $value; 
            }
        }

        //dd($batiment); 
        $batiment->save(); 

        return redirect()->route('admin.bat.show', $batiment->id); 
    }

    public function destroy(Batiment $id){
        $id->delete(); 
        return redirect()->route('admin.bat.all');
    }
}
