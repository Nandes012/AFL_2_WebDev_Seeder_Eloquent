<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Show blog index using posts from database.
     */
    public function index()
    {
        // Load published posts with author relationship, newest first
        $posts = Post::with('user')
            ->whereNotNull('published_at')
            ->orderByDesc('published_at')
            ->get();

        return view('blog.index', compact('posts'));
    }

    /**
     * Show single post by slug from database.
     */
    public function show($slug)
    {
        $post = Post::with('user')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('blog.show', compact('post'));
    }
}