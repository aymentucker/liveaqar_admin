<?php

namespace App\Http\Controllers;

use App\Models\PostComment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = PostComment::all();
        $posts = Post::all();
        return view("comments", compact("comments","posts"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'post_id' => 'required|exists:posts,id',
            'title' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'content' => 'required|string',
            'content_en'=> 'required|string',
            'rating' => 'required|integer',
            'email' => 'required|email',
        ]);

        PostComment::create($validatedData);
        return redirect()->route('comments.index')->with('success', 'Comment added successfully!');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostComment $comment)
    {
        $validatedData = $request->validate([
            'post_id' => 'required|exists:posts,id',
            'title' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'content' => 'required|string',
            'content_en'=> 'required|string',
            'rating' => 'required|integer',
            'email' => 'required|email',
        ]);

        $comment->update($validatedData);
        return redirect()->route('comments.index')->with('success', 'Comment updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostComment $comment)
    {
        $comment->delete();
        return redirect()->route('comments.index')->with('success', 'Comment deleted successfully!');
    }
}
