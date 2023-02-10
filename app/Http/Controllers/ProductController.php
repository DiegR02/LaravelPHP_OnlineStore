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

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'product_id' => 'required',
            'content' => 'required',
        ]);

        $comment = new Comment();
        $comment->user_id = $request->input('user_id');
        $comment->product_id = $request->input('product_id');
        $comment->content = $request->input('content');
        $comment->save();

        return redirect()->back()->with('success', 'Comment created successfully!');
    }
}