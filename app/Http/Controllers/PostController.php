<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('index', [
            // Auth::user()->posts ---- is shorter but entries won't be ordered 
            'posts' => Post::where('user_id', Auth::user()->id)->latest()->get() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('registerPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|min:12|max:255',
            'date' => 'required',
            'description' => 'required|min:20'
        ]);

        Post::create([
            'title' => $request->input('title'),
            'date' => $request->input('date'),
            'description' => $request->input('description'),
            'user_id' => Auth::user()->getAuthIdentifier()
        ]);

        return redirect('users/posts/create')->with('status', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        return view('editPost', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // input validation
        $request->validate([
            'title' => 'required|min:12|max:255',
            'date' => 'required',
            'description' => 'required|min:20'
        ]);

        $post->update([
            'title' => $request->input('title'),
            'date' => $request->input('date'),
            'description' => $request->input('description')
        ]);

        return redirect('/users/posts')->with('status', 'Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return redirect('users/posts')->with('status', 'Post deleted successfully!');
    }
}
