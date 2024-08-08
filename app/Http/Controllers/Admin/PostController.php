<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Category;

class PostController extends Controller
{
    // Hiển thị danh sách bài viết
    public function index()
    {
        $posts = Post::paginate(5); // Pagination, 10 bài viết mỗi trang
        return view('admin.post.index', compact('posts'));
    }

    // Hiển thị form tạo bài viết mới
    public function create()
    {
        $categories = Category::all();
        return view('admin.post.create', compact('categories'));
    }

    // Lưu bài viết mới vào cơ sở dữ liệu
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published_at' => 'nullable|date',
            'category_id' => 'required|exists:categories,id',
        ]);

        $post = new Post();
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->content = $request->input('content');
        $post->published_at = $request->input('published_at');
        $post->category_id = $request->input('category_id');


        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $post->image = $imagePath;
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Bài viết đã được tạo thành công.');
    }


    // Hiển thị chi tiết bài viết
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post.show', compact('post'));
    }

    // Hiển thị form chỉnh sửa bài viết
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all(); // Lấy tất cả danh mục
        return view('admin.post.edit', compact('post', 'categories'));
    }


    // Cập nhật bài viết trong cơ sở dữ liệu
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts,slug,' . $id,
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published_at' => 'nullable|date',
            'category_id' => 'nullable|exists:categories,id'
        ]);

        $post = Post::findOrFail($id);

        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->content = $request->input('content');
        $post->published_at = $request->input('published_at');


        $post->category_id = $request->input('category_id');


        if ($request->hasFile('image')) {

            if ($post->image && Storage::exists($post->image)) {
                Storage::delete($post->image);
            }

            $imagePath = $request->file('image')->store('public/images');
            $validated['image'] = $imagePath;
        } else {
            $validated['image'] = $post->image;
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Bài viết đã được cập nhật thành công.');
    }



    // Xóa bài viết khỏi cơ sở dữ liệu
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        // Xóa hình ảnh nếu có
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Bài viết đã được xóa thành công.');
    }
}
