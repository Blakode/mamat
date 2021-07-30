<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KitchenController extends Controller
{
    public function index() //$var
    {

        $id = 1; 

        $product = DB::table('kitchens')
        ->whereBetween('ItemId', [3,6])
        ->get();

        dd($product);

        //this returns the kitchen view in section . 
        // return view('sections.kitchen')->with('title', $var); 
    }
}
