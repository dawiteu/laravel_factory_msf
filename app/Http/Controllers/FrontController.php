<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use App\Models\Eleve;
use App\Models\Formation;
use App\Models\Typeofformation;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function batiment(){
        $batiments = Batiment::all();
        return view('pages.showbatiments', compact('batiments'));
    }

    public function formations(){
        $forms = Formation::all(); 

        return view('pages.showformations', compact('forms'));
    }

    public function typeformations(){
        $typefs = Typeofformation::all(); 

        return view('pages.showtypeofforms', compact('typefs'));
    }

    public function eleves(){
        $eleves = Eleve::all()->take(25); 
        $eleve2 = Eleve::all()->skip(25)->take(25); 
        return view('pages.showeleves', compact('eleves', 'eleve2'));
    }
}
