<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with('user')->paginate(5);
        return view('admin.comment.index', compact('comments'));
    }

    // Xóa bình luận
    public function destroy(int $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect()->route('comment.index')->with('success', 'Bình luận đã được xóa!');
    }
}
