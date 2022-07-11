<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\CustomProduct;
use Symfony\Component\Console\Input\Input;

class ProductController extends Controller
{


    public function upload($path)
    {
        $result = $path->storeOnCloudinary('/product', $path);
        return $result;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $custom_product = CustomProduct::with('images')->get();
        $products = Product::with('images')->get();
        return view('product.index')->with([
                'products' => $products,
                'custom_products' => $custom_product,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create')->with([
            'product' => new Product,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate request 
        $request->validate([
            'title' => 'required|string|max:30',
            'description' => 'required|string|max:120',
            'category' => 'required|string|max:12',
            'qty' => 'required|integer|size:100',
            'amount' => 'required',
            'user_id' => 'required',
            'images' => 'required|mimes:jpg,jpeg,png,pjeg|max:5048',
            'order_note' => 'nullable|string|max:100'
        ]);

        //create a new product 
        $product = Product::create([
            'user_id' => $request->input('user_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category' => $request->input('category'),
            'qty' => $request->input('qty'),
            'amount' => $request->input('amount'),
        ]);

        // image lenght 
        $product = Product::latest()->first();
        $lenght = count($request->file('images'));


        for ($i = 0; $i < $lenght; $i++) {
            $result = $this->upload($request->file('images')[$i]);
            // upload image if product upload is successfull 
            $image = new Image();
            $image->url = $result->getPath();
            $product->images()->save($image);
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->get();
        return view('product.show')->with([
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        return view('product.edit')->with([
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //validate request 
        $request->validate([
            'title' => 'required|string|max:30',
            'description' => 'required|string|max:120',
            'category' => 'required|string|max:12',
            'qty' => 'required|integer|size:100',
            'amount' => 'required',
            'user_id' => 'required',
            'images' => 'required|mimes:jpg,jpeg,png,pjeg|max:5048',
            'order_note' => 'nullable|string|max:100'
        ]);

        //update existing records 
        $product_update = Product::updateOrCreate([
            'user_id' => $request->input('user_id'),
            'title' => $request->Input('title'),
            'description' => $request->input('description'),
            'category' => $request->input('category'),
            'qty' => $request->input('qty'),
            'amount' => $request->input('amount'),

        ]);

        $product_id = Product::where('id', $request->input('id'))->first();
        //deletes exiting image from cloudinary & publishes new one 

        // delete images url from images record
        $oldImage =Image::where('id',$request->input('id'))->delete();

        //create a new record of images
        if ($product_update) {
                
            for ($i = 0; 'length'; $i++) {
                $result = $this->upload($request->file('images')[$i]);
                // upload image after product upload is successfull 
                $image = new Image();
                $image->url = $result->getPath();
                $product_update->images()->save($image);
            }
        }
        return redirect()->back()->with(['message', 'uplosd successful']); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
