<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('register');
        }

        $request->validate([
            'author' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|string',
            'post_id' => 'required|exists:posts,id',
        ]);

        $userId = Auth::id();

        Comment::create([
            'post_id' => $request->input('post_id'),
            'user_id' => $userId,
            'content' => $request->input('comment'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Bình luận đã được đăng!');
    }
}
