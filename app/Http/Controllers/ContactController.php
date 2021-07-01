<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index( $var )
    {

     
        return view('sections.'.$var)->with('title', $var); 
    }
}
