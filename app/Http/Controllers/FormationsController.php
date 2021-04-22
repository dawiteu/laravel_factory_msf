<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationsController extends Controller
{
    public function index(){ 
        $forms = Formation::all(); 

        return view('pages.showformations', compact('forms'));
    }
}
