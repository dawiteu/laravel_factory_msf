<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class ElevesController extends Controller
{
    public function index(){
        $eleves = Eleve::all()->take(25); 
        $eleve2 = Eleve::all()->skip(25)->take(25); 
        return view('pages.showeleves', compact('eleves', 'eleve2'));
    }
}
