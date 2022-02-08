<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /*read*/
    public function index()
    {
        return Product::all();
    }


    /* store in database*/
    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required|string",
            "price"=>"required|numeric"
        ]);
        return Product::create($request->all());
    }

    /*display with id*/
    public function show($id)
    {
        return Product::find($id);
    }

    /*edit in datbase */
    public function update(Request $request, $id)
    {
        $request->validate([
            "name"=>"required|string",
            "price"=>"required|numeric"
        ]);
        $product =  Product::find($id);
        $product->update($request->all());
        return $product ;
    }

    /*remove and delete*/
    public function destroy($id)
    {
        return Product::destroy($id);
    }
}
