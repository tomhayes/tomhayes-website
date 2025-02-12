<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function index()
    {
        $blogPosts = BlogPost::all();

        return view('blog.index', compact('blogPosts'));
    }
}
