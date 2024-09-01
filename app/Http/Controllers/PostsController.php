<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        return view('posts', compact('posts', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'content' => 'required|string',
            'content_en' => 'required|string',
            'featured_image' => 'required|image|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        $validatedData['featured_image'] = $request->file('featured_image')->store('posts', 'public');

        Post::create($validatedData);
        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'content' => 'required|string',
            'content_en' => 'required|string',
            'featured_image' => 'nullable|image|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('featured_image')) {
            // Delete the old image
            if ($post->featured_image) {
                Storage::disk('public')->delete($post->featured_image);
            }
            // Store the new image
            $validatedData['featured_image'] = $request->file('featured_image')->store('posts', 'public');
        }

        $post->update($validatedData);
        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // Delete the image from storage
        if ($post->featured_image) {
            Storage::disk('public')->delete($post->featured_image);
        }

        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }
}
