<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Facades\Auth;

class AdminCommentController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Comment - Online Store";
        $viewData["comment"] = Comment::all();
        return view('admin.comment.index')->with("viewData", $viewData);
    }

    public function delete($id)
    {
        Comment::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Edit Comment - Online Store";
        $viewData["comment"] = Comment::findOrFail($id);
        return view('admin.comment.edit')->with("viewData", $viewData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'content' => 'required',
        ]);
    
        $comment = Comment::find($id);
        $comment->content = $request->input('content');
        $comment->save();
    
        return redirect()->route('admin.comment.index');
    }

   
}