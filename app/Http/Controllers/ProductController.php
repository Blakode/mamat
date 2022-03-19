<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    //this controller renders the services page & method. 
    public function index($var)
    {
        return view('sections.services')->with('title', $var); 
    }
}
