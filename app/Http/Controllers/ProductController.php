<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Comment;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] =  "List of products";
        $viewData["products"] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product["name"]." - Online Store";
        $viewData["subtitle"] =  $product["name"]." - Product information";
        $viewData["product"] = $product;
        //produc id = $id 
        $viewData["comments"] = Comment::where('product_id', $id)->get();
        return view('product.show')->with("viewData", $viewData);
    }

}