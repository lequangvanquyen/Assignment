<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $categoryId = $request->query('category');

        if ($categoryId) {
            $posts = Post::where('category_id', $categoryId)
                ->latest()
                ->paginate(9);
        } else {
            $posts = Post::with('category')->latest()->paginate(9);
        }

        return view('Frontend.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::with(['comments.user'])->findOrFail($id);
        return view('Frontend.show', compact('post'));
    }
}
