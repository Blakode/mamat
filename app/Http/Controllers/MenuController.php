<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(mixed $var = null)
    {
        return view('sections.menu'); 
    }
}
