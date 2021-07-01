<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index($var)
    {

        return view('sections.'.$var)->with('title', $var); 
    }
}
