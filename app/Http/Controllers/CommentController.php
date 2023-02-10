<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required',
        ]);

        $comment = new Comment();
        $comment->user_id = Auth::user()->getId();
        $comment->product_id = $request->input('product_id');
        $comment->content = $request->input('content');
        $comment->save();

        return redirect()->back()->with('success', 'Comment created successfully!');
    }
}