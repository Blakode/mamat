<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with('orders','images')->get(); 
        return view('home')->with(['products'=> $products,]);
       
    }
}
