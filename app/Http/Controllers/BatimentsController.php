<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use Illuminate\Http\Request;

class BatimentsController extends Controller
{
    public function index(){
        $batiments = Batiment::all();
        return view('pages.showbatiments', compact('batiments'));
    }
}
