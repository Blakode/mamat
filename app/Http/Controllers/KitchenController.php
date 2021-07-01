<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KitchenController extends Controller
{
    public function index($var)
    {
        return view('sections.kitchen')->with('title', $var); 
    }
}
