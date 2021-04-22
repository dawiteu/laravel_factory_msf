<?php

namespace App\Http\Controllers;

use App\Models\Typeofformation;
use Illuminate\Http\Request;

class TypeofformationsController extends Controller
{
    public function index(){
        $typefs = Typeofformation::all(); 

        return view('pages.showtypeofforms', compact('typefs'));
    }
}
