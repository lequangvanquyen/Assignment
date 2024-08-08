<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagController extends Controller
{
    // Display a list of tags
    public function index()
    {
        $tags = Tag::paginate(5); // Adjust pagination as needed
        return view('admin.tags.index', compact('tags'));
    }

    // Show the form for creating a new tag
    public function create()
    {
        return view('admin.tags.create');
    }

    // Store a newly created tag in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:tags,slug|max:255',
        ]);

        Tag::create($request->only('name', 'slug'));

        return redirect()->route('tags.index')->with('success', 'Tag đã tạo thành công.');
    }

    // Display the specified tag
    public function show(int $id)
    {
        $tag = Tag::findOrFail($id);
        return view('admin.tags.show', compact('tag'));
    }

    // Show the form for editing the specified tag
    public function edit(int $id)
    {
        $tag = Tag::findOrFail($id);
        return view('admin.tags.edit', compact('tag'));
    }

    // Update the specified tag in storage
    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:tags,slug,' . $id . '|max:255',
        ]);

        $tag = Tag::findOrFail($id);
        $tag->update($request->only('name', 'slug'));

        return redirect()->route('tags.index')->with('success', 'Tag cập nhật thành công.');
    }

    // Remove the specified tag from storage
    public function destroy(int $id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();

        return redirect()->route('tags.index')->with('success', 'Tag đã xoá thành công.');
    }
}
